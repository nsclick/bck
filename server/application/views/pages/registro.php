<h1>Registro</h1>

cada tres caracteres es un dia.

000 no hay horas

5A1 -- dia lleno

cualquier otra cosa disponible

fecha de inicio inicio de la agenda desde donde donde inicias


<p>Para registrarte ingresa los siguientes datos:</p>
<p>Al registrarte podrás acceder al servicio de <b>Reserva de Horas.</b></p>

<?php $attributes['id'] = 'registro'; ?>
<?php echo form_open('registro', $attributes); ?>

<div class="form-group">
    <label for="rut">RUT*</label>
    <input type="text" class="form-control" id="Rut_Paciente" name="Rut_Paciente" placeholder="Ej: 333333333-K" required> 
  </div>  
  <div class="form-group">
    <label for="Fechanac_Paciente">Fecha Nacimiento*</label>
  
	<div class='input-group date' id='datetimepicker1'>
    	<input type='date' class="form-control" id="Fechanac_Paciente" name="Fechanac_Paciente" data-format="DD/MM/YYYY" placeholder="DD/MM/YYYY" required>
        <span class="input-group-addon" >
        	<span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>    
  
  </div>  
  <div class="form-group">
    <label for="Nombre_Paciente">Nombres*</label>
    <input type="text" class="form-control" id="Nombre_Paciente" name="Nombre_Paciente" placeholder="Ingrese su nombre" required>
  </div>  
  <div class="form-group">
    <label for="Apepat_Paciente">Primer Apellido*</label>
    <input type="text" class="form-control" id="Apepat_Paciente" name="Apepat_Paciente" placeholder="Ingrese su primer apellido" data-validation-matches-match="email"  required>
  </div>  
  <div class="form-group">
    <label for="Apemat_Paciente">Segundo Apellido</label>
    <input type="text" class="form-control" id="Apemat_Paciente" name="Apemat_Paciente" placeholder="Ingrese su segundo apellido">
  </div> 

  <div class="form-group">
    <label for="Direccion_Paciente">Dirección</label>
    <input type="text" class="form-control" id="Direccion_Paciente" name="Direccion_Paciente" placeholder="Ingrese su dirección" required>
  </div> 
  
  <div class="form-group">
    <label for="Direccion_Paciente">Comuna</label>
    <select class="form-control" id="Direccion_Paciente" name="Direccion_Paciente" required>
		<option value="" ></option>
		<option value="79">ALGARROBO</option>
		<option value="336">ALHUE</option>
		<option value="28">ALTO DEL CARMEN</option>
		<option value="257">ANCUD</option>
		<option value="32">ANDACOLLO</option>
		<option value="197">ANGOL</option>
		<option value="290">ANTARTICA</option>
		<option value="16">ANTOFAGASTA</option>
		<option value="169">ANTUCO</option>
		<option value="191">ARAUCO</option>
		<option value="1">ARICA</option>
		<option value="272">AYSEN</option>
		<option value="330">BUIN</option>
		<option value="155">BULNES</option>
		<option value="46">CABILDO</option>
		<option value="167">CABRERO</option>
		<option value="13">CALAMA</option>
		<option value="250">CALBUCO</option>
		<option value="23">CALDERA</option>
		<option value="61">CALERA</option>
		<option value="332">CALERA DE TANGO</option>
		<option value="51">CALLE LARGA</option>
		<option value="2">CAMARONES</option>
		<option value="7">CAMINA</option>
		<option value="194">CANETE</option>
		<option value="224">CARAHUE</option>
		<option value="76">CARTAGENA</option>
		<option value="72">CASABLANCA</option>
		<option value="256">CASTRO</option>
		<option value="58">CATEMU</option>
		<option value="142">CAUQUENES</option>
		<option value="315">CERRILLOS</option>
		<option value="320">CERRO NAVIA</option>
		<option value="266">CHAITEN</option>
		<option value="20">CHANARAL</option>
		<option value="144">CHANCO</option>
		<option value="103">CHEPICA</option>
		<option value="189">CHIGUAYANTE</option>
		<option value="275">CHILE CHICO</option>
		<option value="145">CHILLAN</option>
		<option value="165">CHILLAN VIEJO</option>
		<option value="100">CHIMBARONGO</option>
		<option value="263">CHONCHI</option>
		<option value="273">CISNES</option>
		<option value="161">COBQUECURA</option>
		<option value="249">COCHAMO</option>
		<option value="277">COCHRANE</option>
		<option value="85">CODEGUA</option>
		<option value="159">COELEMU</option>
		<option value="149">COIHUECO</option>
		<option value="96">COINCO</option>
		<option value="136">COLBUN</option>
		<option value="8">COLCHANE</option>
		<option value="323">COLINA</option>
		<option value="199">COLLIPULLI</option>
		<option value="95">COLTAUCO</option>
		<option value="38">COMBARBALA</option>
		<option value="179">CONCEPCION</option>
		<option value="293">CONCHALI</option>
		<option value="74">CON-CON</option>
		<option value="131">CONSTITUCION</option>
		<option value="195">CONTULMO</option>
		<option value="22">COPIAPO</option>
		<option value="31">COQUIMBO</option>
		<option value="187">CORONEL</option>
		<option value="233">CORRAL</option>
		<option value="270">COYHAIQUE</option>
		<option value="212">CUNCO</option>
		<option value="201">CURACAUTIN</option>
		<option value="335">CURACAVI</option>
		<option value="260">CURACO DE VELEZ</option>
		<option value="192">CURANILAHUE</option>
		<option value="214">CURARREHUE</option>
		<option value="132">CUREPTO</option>
		<option value="115">CURICO</option>
		<option value="259">DALCAHUE</option>
		<option value="21">DIEGO DE ALMAGRO</option>
		<option value="97">DONIHUE</option>
		<option value="311">EL BOSQUE</option>
		<option value="152">EL CARMEN</option>
		<option value="341">EL MONTE</option>
		<option value="78">EL QUISCO</option>
		<option value="77">EL TABO</option>
		<option value="129">EMPEDRADO</option>
		<option value="242">ENTRE LAGOS</option>
		<option value="202">ERCILLA</option>
		<option value="314">ESTACION CENTRAL</option>
		<option value="183">FLORIDA</option>
		<option value="217">FREIRE</option>
		<option value="26">FREIRINA</option>
		<option value="253">FRESIA</option>
		<option value="255">FRUTILLAR</option>
		<option value="268">FUTALEUFU</option>
		<option value="232">FUTRONO</option>
		<option value="226">GALVARINO</option>
		<option value="4">GENERAL LAGOS</option>
		<option value="219">GORBEA</option>
		<option value="83">GRANEROS</option>
		<option value="274">GUAITECAS</option>
		<option value="63">HIJUELAS</option>
		<option value="267">HUALAIQUE</option>
		<option value="120">HUALANE</option>
		<option value="184">HUALQUI</option>
		<option value="6">HUARA</option>
		<option value="27">HUASCO</option>
		<option value="294">HUECHURABA</option>
		<option value="40">ILLAPEL</option>
		<option value="292">INDEPENDENCIA</option>
		<option value="5">IQUIQUE</option>
		<option value="340">ISLA DE MAIPO</option>
		<option value="81">ISLA DE PASCUA</option>
		<option value="73">JUAN FERNANDEZ</option>
		<option value="310">LA CISTERNA</option>
		<option value="60">LA CRUZ</option>
		<option value="112">LA ESTRELLA</option>
		<option value="304">LA FLORIDA</option>
		<option value="306">LA GRANJA</option>
		<option value="30">LA HIGUERA</option>
		<option value="44">LA LIGUA</option>
		<option value="307">LA PINTANA</option>
		<option value="301">LA REINA</option>
		<option value="29">LA SERENA</option>
		<option value="236">LA UNION</option>
		<option value="239">LAGO RANCO</option>
		<option value="271">LAGO VERDE</option>
		<option value="284">LAGUNA BLANCA</option>
		<option value="176">LAJA</option>
		<option value="324">LAMPA</option>
		<option value="230">LANCO</option>
		<option value="98">LAS CABRAS</option>
		<option value="299">LAS CONDES</option>
		<option value="209">LAUTARO</option>
		<option value="190">LEBU</option>
		<option value="121">LICANTEN</option>
		<option value="64">LIMACHE</option>
		<option value="134">LINARES</option>
		<option value="111">LITUECHE</option>
		<option value="57">LLAILLAY</option>
		<option value="254">LLANQUIHUE</option>
		<option value="298">LO BARNECHEA</option>
		<option value="313">LO ESPEJO</option>
		<option value="318">LO PRADO</option>
		<option value="105">LOLOL</option>
		<option value="220">LONCOCHE</option>
		<option value="137">LONGAVI</option>
		<option value="200">LONQUIMAY</option>
		<option value="193">LOS ALAMOS</option>
		<option value="49">LOS ANDES</option>
		<option value="166">LOS ANGELES</option>
		<option value="231">LOS LAGOS</option>
		<option value="252">LOS MUERMOS</option>
		<option value="207">LOS SAUCES</option>
		<option value="42">LOS VILOS</option>
		<option value="186">LOTA</option>
		<option value="205">LUMACO</option>
		<option value="86">MACHALI</option>
		<option value="302">MACUL</option>
		<option value="234">MAFIL</option>
		<option value="316">MAIPU</option>
		<option value="90">MALLOA</option>
		<option value="113">MARCHIGUE</option>
		<option value="12">MARIA ELENA</option>
		<option value="334">MARIA PINTO</option>
		<option value="229">MARIQUINA</option>
		<option value="128">MAULE</option>
		<option value="251">MAULLIN</option>
		<option value="17">MEJILLONES</option>
		<option value="213">MELIPEUCO</option>
		<option value="333">MELIPILLA</option>
		<option value="343">MILAN</option>
		<option value="43">MINCHA</option>
		<option value="118">MOLINA</option>
		<option value="37">MONTE PATRIA</option>
		<option value="84">MOSTAZAL</option>
		<option value="173">MULCHEN</option>
		<option value="175">NACIMIENTO</option>
		<option value="102">NANCAGUA</option>
		<option value="280">NATALES</option>
		<option value="289">NAVARINO</option>
		<option value="110">NAVIDAD</option>
		<option value="174">NEGRETE</option>
		<option value="163">NINHUE</option>
		<option value="147">NIQUEN</option>
		<option value="62">NOGALES</option>
		<option value="225">NUEVA IMPERIAL</option>
		<option value="300">NUNOA</option>
		<option value="278">OHIGGINS</option>
		<option value="87">OLIVAR</option>
		<option value="14">OLLAGUE</option>
		<option value="65">OLMUE</option>
		<option value="240">OSORNO</option>
		<option value="35">OVALLE</option>
		<option value="342">PADRE HURTADO</option>
		<option value="227">PADRE LAS CASAS</option>
		<option value="34">PAIGUANO</option>
		<option value="237">PAILLACO</option>
		<option value="331">PAINE</option>
		<option value="269">PALENA</option>
		<option value="107">PALMILLA</option>
		<option value="235">PANGUIPULLI</option>
		<option value="56">PANQUEHUE</option>
		<option value="48">PAPUDO</option>
		<option value="114">PAREDONES</option>
		<option value="138">PARRAL</option>
		<option value="312">PEDRO AGUIRRE CERDA</option>
		<option value="125">PELARCO</option>
		<option value="143">PELLUHUE</option>
		<option value="154">PEMUCO</option>
		<option value="339">PENAFLOR</option>
		<option value="303">PENALOLEN</option>
		<option value="130">PENCAHUE</option>
		<option value="181">PENCO</option>
		<option value="108">PERALILLO</option>
		<option value="210">PERQUENCO</option>
		<option value="45">PETORCA</option>
		<option value="94">PEUMO</option>
		<option value="9">PICA</option>
		<option value="93">PICHIDEGUA</option>
		<option value="109">PICHILEMU</option>
		<option value="150">PINTO</option>
		<option value="328">PIRQUE</option>
		<option value="218">PITRUFQUEN</option>
		<option value="101">PLACILLA</option>
		<option value="158">PORTEZUELO</option>
		<option value="286">PORVENIR</option>
		<option value="10">POZO ALMONTE</option>
		<option value="287">PRIMAVERA</option>
		<option value="296">PROVIDENCIA</option>
		<option value="69">PUCHUNCAVI</option>
		<option value="215">PUCON</option>
		<option value="319">PUDAHUEL</option>
		<option value="326">PUENTE ALTO</option>
		<option value="247">PUERTO MONTT</option>
		<option value="243">PUERTO OCTAY</option>
		<option value="248">PUERTO VARAS</option>
		<option value="106">PUMANQUE</option>
		<option value="39">PUNITAQUI</option>
		<option value="282">PUNTA ARENAS</option>
		<option value="262">PUQUELDON</option>
		<option value="206">PUREN</option>
		<option value="244">PURRANQUE</option>
		<option value="54">PUTAENDO</option>
		<option value="3">PUTRE</option>
		<option value="264">QUEILEN</option>
		<option value="265">QUELLON</option>
		<option value="258">QUEMCHI</option>
		<option value="172">QUILACO</option>
		<option value="322">QUILICURA</option>
		<option value="170">QUILLECO</option>
		<option value="156">QUILLON</option>
		<option value="59">QUILLOTA</option>
		<option value="70">QUILPUE</option>
		<option value="261">QUINCHAO</option>
		<option value="91">QUINTA DE TILCOCO</option>
		<option value="317">QUINTA NORMAL</option>
		<option value="68">QUINTERO</option>
		<option value="162">QUIRIHUE</option>
		<option value="82">RANCAGUA</option>
		<option value="157">RANQUIL</option>
		<option value="123">RAUCO</option>
		<option value="295">RECOLETA</option>
		<option value="198">RENAICO</option>
		<option value="321">RENCA</option>
		<option value="89">RENGO</option>
		<option value="88">REQUINOA</option>
		<option value="139">RETIRO</option>
		<option value="52">RINCONADA</option>
		<option value="238">RIO BUENO</option>
		<option value="126">RIO CLARO</option>
		<option value="36">RIO HURTADO</option>
		<option value="276">RIO IBANEZ</option>
		<option value="245">RIO NEGRO</option>
		<option value="283">RIO VERDE</option>
		<option value="117">ROMERAL</option>
		<option value="223">SAAVEDRA</option>
		<option value="119">SAGRADA FAMILIA</option>
		<option value="41">SALAMANCA</option>
		<option value="75">SAN ANTONIO</option>
		<option value="329">SAN BERNARDO</option>
		<option value="146">SAN CARLOS</option>
		<option value="127">SAN CLEMENTE</option>
		<option value="50">SAN ESTEBAN</option>
		<option value="148">SAN FABIAN</option>
		<option value="53">SAN FELIPE</option>
		<option value="99">SAN FERNANDO</option>
		<option value="285">SAN GREGORIO</option>
		<option value="151">SAN IGNACIO</option>
		<option value="141">SAN JAVIER</option>
		<option value="305">SAN JOAQUIN</option>
		<option value="327">SAN JOSE DE MAIPO</option>
		<option value="246">SAN JUAN DE LA COSTA</option>
		<option value="309">SAN MIGUEL</option>
		<option value="164">SAN NICOLAS</option>
		<option value="241">SAN PABLO</option>
		<option value="337">SAN PEDRO</option>
		<option value="15">SAN PEDRO DE ATACAMA</option>
		<option value="188">SAN PEDRO DE LA PAZ</option>
		<option value="133">SAN RAFAEL</option>
		<option value="308">SAN RAMON</option>
		<option value="177">SAN ROSENDO</option>
		<option value="92">SAN VICENTE</option>
		<option value="171">SANTA BARBARA</option>
		<option value="104">SANTA CRUZ</option>
		<option value="185">SANTA JUANA</option>
		<option value="55">SANTA MARIA</option>
		<option value="291">SANTIAGO</option>
		<option value="80">SANTO DOMINGO</option>
		<option value="18">SIERRA GORDA</option>
		<option value="338">TALAGANTE</option>
		<option value="124">TALCA</option>
		<option value="180">TALCAHUANO</option>
		<option value="19">TALTAL</option>
		<option value="208">TEMUCO</option>
		<option value="116">TENO</option>
		<option value="222">TEODORO SCHMIDT</option>
		<option value="24">TIERRA AMARILLA</option>
		<option value="325">TILTIL</option>
		<option value="288">TIMAUKEL</option>
		<option value="196">TIRUA</option>
		<option value="11">TOCOPILLA</option>
		<option value="221">TOLTEN</option>
		<option value="182">TOME</option>
		<option value="281">TORRES DEL PAINE</option>
		<option value="279">TORTEL</option>
		<option value="204">TRAIGUEN</option>
		<option value="160">TREGUACO</option>
		<option value="168">TUCAPEL</option>
		<option value="228">VALDIVIA</option>
		<option value="25">VALLENAR</option>
		<option value="66">VALPARAISO</option>
		<option value="122">VICHUQUEN</option>
		<option value="203">VICTORIA</option>
		<option value="33">VICUNA</option>
		<option value="211">VILCUN</option>
		<option value="140">VILLA ALEGRE</option>
		<option value="71">VILLA ALEMANA</option>
		<option value="216">VILLARRICA</option>
		<option value="67">VINA DEL MAR</option>
		<option value="297">VITACURA</option>
		<option value="135">YERBAS BUENAS</option>
		<option value="178">YUMBEL</option>
		<option value="153">YUNGAY</option>
		<option value="47">ZAPALLAR</option>
	</select>
  </div> 
  
  <button type="submit" class="btn btn-primary">Registrar</button>
  
</form>


<script type="text/javascript"> 
  $(function() {
    
    $('#datetimepicker1').datetimepicker({
    	pickTime: false
    });
    
    $("input,select,textarea").not("[type=submit]").jqBootstrapValidation({
                        preventSubmit: true,
                        submitError: function($form, event, errors) {
                            // Here I do nothing, but you could do something like display 
                            // the error messages to the user, log, etc.
                        },
                        submitSuccess: function($form, event) {
                            alert("OK");
                            event.preventDefault();
                        },
                        filter: function() {
                            return $(this).is(":visible");
                        }
                    }); 
    
  });
</script>
