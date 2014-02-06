<h1>Médicos</h1>

<ul>
	<li>Si conoces el apellido del médico con el cual te quieres atender, escríbelo en el espacio asignado.</li>
	<li>Si no tienes médico definido, elije el área en la que te quieres atender.</li>
</ul>

<h3>Clínica Dávila</h3>

<?php $attributes = array('role' => 'form'); ?>
<?php echo form_open('buscarmedico', $attributes); ?>
  <div class="form-group">
    <label for="apellido">Apellido Profesional</label>
    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese el apellido del profesional">
  </div>  
  <button type="submit" class="btn btn-default">Ir</button>
</form>

<br/>


<?php $attributes['id'] = 'buscaarea'; ?>
<?php echo form_open('buscarmedico', $attributes); ?>
  <div class="form-group">
    <label for="area">Área</label>
	<select class="form-control" id="area" name="area">
		<option value=""></option>
		<option value="32701180">ALERGIA E INMUNOLOGIA ADULTO</option>
		<option value="32701181">ALERGIA E INMUNOLOGIA INFANTIL</option>
		<option value="30101001">BRONCOPULMONAR ADULTO</option>
		<option value="30101002">BRONCOPULMONAR INFANTIL</option>
		<option value="30101003">CARDIOLOGIA ADULTO</option>
		<option value="30101004">CARDIOLOGIA INFANTIL</option>
		<option value="32701175">CIRUGIA - TRAUMATOLOGIA BUCAL Y MAXILO F</option>
		<option value="30101005">CIRUGIA ADULTO</option>
		<option value="32701159">CIRUGIA BARIATRICA</option>
		<option value="32701047">CIRUGIA CABEZA Y CUELLO</option>
		<option value="32701172">CIRUGIA CARDIACA</option>
		<option value="32701088">CIRUGIA CARDIOVASCULAR ADULTO</option>
		<option value="30101060">CIRUGIA CARDIOVASCULAR INFANTIL</option>
		<option value="32701219">CIRUGIA CARDIOVASCULAR Y TRASPLANTE</option>
		<option value="30101006">CIRUGIA DE TORAX</option>
		<option value="32701031">CIRUGIA DIGESTIVA</option>
		<option value="30101038">CIRUGIA INFANTIL</option>
		<option value="30101049">CIRUGIA MAMAS</option>
		<option value="32701194">CIRUGIA NEONATAL</option>
		<option value="32701052">CIRUGIA ONCOLOGICA ADULTO</option>
		<option value="32701190">CIRUGIA PLASTICA ESTETICA Y REPARADORA</option>
		<option value="32701029">CIRUGIA PLASTICA INFANTIL</option>
		<option value="32701189">CIRUGIA PLASTICA REPARADORA</option>
		<option value="32701169">CIRUGIA TRASPLANTE CARDIOPULMONAR</option>
		<option value="30101009">CIRUGIA VASCULAR ADULTO</option>
		<option value="32701017">CIRUGIA VASCULAR PERIFERICA</option>
		<option value="30101029">COLOPROCTOLOGIA</option>
		<option value="32701196">COMPOSICION CORPORAL BIOIMPEDANCIOMETRIA</option>
		<option value="32701149">CONSULTA CICATRICES - COMPRESIONES (KINE</option>
		<option value="32701222">CONTROL DE PACIENTE ONCOLOGICO PEDIATRIC</option>
		<option value="32701087">CONTROL POST TRASPLANTE HEPATICO</option>
		<option value="32701086">CONTROL TRASPLANTE RENAL</option>
		<option value="30101010">DERMATOLOGIA ADULTO</option>
		<option value="30101061">DERMATOLOGIA INFANTIL</option>
		<option value="30101036">DIABETOLOGIA Y NUTRICION ADULTO</option>
		<option value="30101056">ENDOCRINOLOGIA INFANTIL</option>
		<option value="30101011">ENDOCRINOLOGIA Y DIABETES ADULTO</option>
		<option value="32701160">EVALUACION NEUROPSICOLOGICA</option>
		<option value="32701161">EVALUACION POST TRASPLANTE CARDIOPULMONA</option>
		<option value="32701166">EVALUACION POST TRASPLANTE RENAL </option>
		<option value="32701164">EVALUACION POST TRASPLANTE RENAL RECIENT</option>
		<option value="32701165">EVALUACION PRE  TRASPLANTE HEPATICO</option>
		<option value="32701167">EVALUACION PRE TRASPLANTE CARDIO PULMONA</option>
		<option value="32701163">EVALUACION PRE TRASPLANTE RENAL </option>
		<option value="32701103">EVALUACION PREOPERATORIA</option>
		<option value="32701012">FISIATRIA ADULTO</option>
		<option value="32701090">FISIATRIA INFANTIL</option>
		<option value="30101037">FONOAUDIOLOGIA ADULTO</option>
		<option value="32701091">FONOAUDIOLOGIA ADULTO ALT VOZ Y LENGUAJE</option>
		<option value="32701092">FONOAUDIOLOGIA INFANTIL ALT VOZ Y LENGUA</option>
		<option value="30101012">GASTROENTEROLOGIA ADULTO</option>
		<option value="30101057">GASTROENTEROLOGIA INFANTIL</option>
		<option value="32701055">GENETICA_CLINICA </option>
		<option value="30101013">GERIATRIA</option>
		<option value="32701104">GINECOLOGIA INFANTIL DEL PREADOLESCENTE</option>
		<option value="30101044">GINECOLOGIA INFANTIL Y ADOLESCENCIA</option>
		<option value="30101014">GINECO-OBSTETRA</option>
		<option value="30101015">HEMATOLOGIA ADULTO</option>
		<option value="30101046">HEMATOLOGIA INFANTIL</option>
		<option value="30101016">INFECTOLOGIA ADULTO</option>
		<option value="30101043">INFECTOLOGIA INFANTIL</option>
		<option value="32701024">INFERTILIDAD</option>
		<option value="32701046">INMUNOLOGIA ADULTO</option>
		<option value="32701028">INMUNOLOGIA INFANTIL</option>
		<option value="32701216">KINE -  OBESIDAD ADULTOS</option>
		<option value="32701217">KINE -  OBESIDAD PEDIATRIA</option>
		<option value="32701215">KINE -  ONCOLOGIA PEDIATRICA</option>
		<option value="32701154">KINE -  REHABILITACION PULMONAR</option>
		<option value="32701152">KINE - NEUROLOGICA  ADULTOS</option>
		<option value="32701184">KINE - REHABILITACION NEUROLOGICA ADULTO</option>
		<option value="32701185">KINE - REHABILITACION NEUROLOGICA INFANT</option>
		<option value="32701211">KINE - REHABILITACION PISO PELVICO</option>
		<option value="32701186">KINE - REHABILITACION PULMONAR</option>
		<option value="32701153">KINE- OBESIDAD </option>
		<option value="32701039">MANEJO DEL DOLOR</option>
		<option value="30101017">MAXILO_FACIAL</option>
		<option value="30101018">MEDICINA GENERAL</option>
		<option value="30101019">MEDICINA INTERNA</option>
		<option value="32701041">MEDICINA INTERNA</option>
		<option value="32701224">MEDICINA INTERNA DEDICADO A GASTROENTERO</option>
		<option value="32701176">MEDICINA TRANSFUSIONAL</option>
		<option value="30101021">NEFROLOGIA ADULTO</option>
		<option value="30101042">NEFROLOGIA INFANTIL</option>
		<option value="30101028">NEONATOLOGIA</option>
		<option value="30101024">NEUROCIRUGIA ADULTO</option>
		<option value="32701182">NEUROCIRUGIA ADULTO - INFANTIL</option>
		<option value="32701034">NEUROCIRUGIA INFANTIL</option>
		<option value="30101022">NEUROLOGIA ADULTO</option>
		<option value="30101023">NEUROLOGIA INFANTIL</option>
		<option value="32701101">NEURORADIOLOGIA INTERVENCIONAL</option>
		<option value="30101035">NUTRICION ADULTO (NUTRICIONISTA)</option>
		<option value="30101047">NUTRICION INFANTIL (NUTRICIONISTA)</option>
		<option value="32701178">NUTRIOLOGIA INFANTO JUVENIL</option>
		<option value="30101075">NUTRIOLOGO ADULTO</option>
		<option value="32701037">NUTRIOLOGO INFANTIL</option>
		<option value="30101025">OFTALMOLOGIA - ADULTO</option>
		<option value="32701134">OFTALMOLOGIA - CATARATA CORNEA Y REFRACT</option>
		<option value="32701133">OFTALMOLOGIA - CATARATA Y CIRUGIA REFRAC</option>
		<option value="32701135">OFTALMOLOGIA - CIRUGIA DE RETINA</option>
		<option value="32701214">OFTALMOLOGIA - CIRUGIA OCULOPLASTICA</option>
		<option value="32701136">OFTALMOLOGIA - CIRUGIA REFRACTIVA</option>
		<option value="32701205">OFTALMOLOGIA - ENFERMEDADES DE LA RETINA</option>
		<option value="32701213">OFTALMOLOGIA - ENFERMEDADES DE LA UVEDA</option>
		<option value="32701137">OFTALMOLOGIA - GLAUCOMA</option>
		<option value="32701200">OFTALMOLOGIA - GLAUCOMA CATARATA REFRACT</option>
		<option value="30101062">OFTALMOLOGIA - INFANTIL</option>
		<option value="32701142">OFTALMOLOGIA - NEUROFTALMOLOGO</option>
		<option value="32701203">OFTALMOLOGIA - ONCOLOGIA, OFT GENERAL</option>
		<option value="32701202">OFTALMOLOGIA - PEDIATRIA, ESTRABISMO</option>
		<option value="32701139">OFTALMOLOGIA - PLASTICA, ORBITA, VIA LAG</option>
		<option value="32701201">OFTALMOLOGIA - RETINA, CATARATA Y REFRAC</option>
		<option value="32701141">OFTALMOLOGIA - RETINA NO QUIRUR. PREMAT</option>
		<option value="32701140">OFTALMOLOGIA - RETINA NO QUIRUR. UVEA</option>
		<option value="32701212">OFTALMOLOGIA - TUMORES OCULARES</option>
		<option value="32701206">OFTALMOLOGIA - UVEA, CATARATA, REFRACTIV</option>
		<option value="30101076">ONCOLOGIA ADULTO</option>
		<option value="32701016">ONCOLOGIA INFANTIL</option>
		<option value="32701015">ORTOPEDIA INFANTIL</option>
		<option value="30101040">OTORRINOLARINGOLOGIA ADULTO</option>
		<option value="30101063">OTORRINOLARINGOLOGIA INFANTIL</option>
		<option value="30101027">PEDIATRIA GENERAL</option>
		<option value="32701226">PLANIFICACION FAMILIAR Y MET. NATURALES</option>
		<option value="32701043">PSICOPEDAGOGIA</option>
		<option value="30101032">REUMATOLOGIA ADULTO</option>
		<option value="30101048">REUMATOLOGIA INFANTIL</option>
		<option value="32701057">TRAUMA - ESCOLIOSIS ADULTO E INFANTIL</option>
		<option value="32701068">TRAUMA ADULTO- CIRUGIA RECONSTRUCTIVA</option>
		<option value="30101033">TRAUMATOLOGIA ADULTO</option>
		<option value="32701059">TRAUMATOLOGIA ADULTO - CIRUGIA DE MANO</option>
		<option value="32701168">TRAUMATOLOGIA ADULTO - CIRUGIA DE PIE</option>
		<option value="32701064">TRAUMATOLOGIA ADULTO - CIRUGIA HOMBRO</option>
		<option value="32701062">TRAUMATOLOGIA ADULTO - CIRUGIA RODILLA</option>
		<option value="32701060">TRAUMATOLOGIA ADULTO - PATOLOGIA CADERAS</option>
		<option value="32701061">TRAUMATOLOGIA ADULTO - PATOLOGIA COLUMNA</option>
		<option value="32701063">TRAUMATOLOGIA ADULTO - TUMORES OSEOS</option>
		<option value="30101039">TRAUMATOLOGIA INFANTIL</option>
		<option value="30101034">UROLOGIA ADULTO</option>
		<option value="30101045">UROLOGIA INFANTIL</option>
    </select>
  </div>
  <button type="submit" class="btn btn-default">Ir</button>
  <input type="hidden" name="area-label" value="">
</form>

<p>
Para anular las horas reservadas, haz click <a href="<?php echo base_url("anulacion/");?>">aquí</a><br>
Para consultar las horas reservadas, haz click <a href="<?php echo base_url("consulta/");?>">aquí</a>
</p>

<p>Para recibir información de Clínica Dávila sobre temas de salud y otros, en tu correo electrónico, presiona <a href="javascript:void(0)" id="emailme" data-toggle="modal" data-target="#myModal">aquí</a></p>



 <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Registra tu correo electrónico</h4>
      </div>
	  <form method="POST" role="form">
      <div class="modal-body">
		  <div class="form-group">
		    <label for="apellido">Correo Electrónico</label>
		    <input type="email" class="form-control" id="apellido" name="apellido" placeholder="Ingrese el apellido">
		  </div>  
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
	$( document ).ready(function() {
		
		$( '#area' ).change(function (e){
			var text = $("#area option:selected").text();
			$( "input[name='area-label']" ).val(text);
		});

	});
</script>