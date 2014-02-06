#!/bin/sh

STARTTIME=$(date +%s)

# Project settings
project_name="inalco-site"
project_folder="/home/cesar/code/inalco/site/"
project_key=dbbb3d98b79120d3cccf0b83f7da2191

# MySQL settings
mysql_user="root"
mysql_password=""
mysql_host="localhost"
mysql_database="inalcosite_dev"

# Base settings
CWD=$(pwd)
now="$(date +'%Y%m%d_%H%M')"
backup_dir="$CWD/backups/$now"
backup_filename="${project_name}_${now}.tar.gz"
project_basename=$(basename "${project_folder}")
http_user=admin
http_passwd=nsdev

# create backup directory
mkdir -p -m 700 ${backup_dir}

# Database backup
mysqldump --host=${mysql_host} --user=${mysql_user} --password=${mysql_password} ${mysql_database} > "${backup_dir}/${mysql_database}_${now}.sql"
dbfilesize=$(stat -c%s "${backup_dir}/${mysql_database}_${now}.sql")

# Files backup
cd ${project_folder}
cd ..
tar -zcvf ${backup_filename} ${project_basename} > /dev/null 2>&1
mv ${backup_filename} ${backup_dir}
cd ${backup_dir}
filesize=$(stat -c%s ${backup_filename}) 

ENDTIME=$(date +%s)
elapsed=$(($ENDTIME - $STARTTIME))

curl --user ${http_user}:${http_passwd} http://bck.local/api/register -d"key=${project_key}&files_size=${filesize}&db_size=${dbfilesize}&elapsed=${elapsed}" 
