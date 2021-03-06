<!-- altura maxima del view port y centrado  -->
<div class="flex item-start align-center justify-center
  bg-gray-100">
  <!-- Marco 768 -->
  <div class="flex flex-col flex-grow
    md:mt-20 m-3
    lg:max-w-screen-md">
    <!-- Boton Boleta Factura -->
    <div class="flex flex-col mt-3 md:flex-row justify-between items-start">
      <h3 class="text-2xl text-gray-700">Boleta Electronica
        <span class="text-gray-700 font-semibold text-sm">( B001-23456 )</span></h3>
      <div class="md:w-1/4 mt-3 md:mt-0 flex items-start">
        <button class="px-2 py-1 rounded mr-2 bg-gray-200"><i class="fas fa-cog"></i></button>
        <div class="mr-2 mb-3">
          <select name="" id="" class="p-1 border rounded-md w-full
            text-gray-600 font-semibold text-sm
            bg-gray-200">
            <option value="">Boleta Electronica</option>
            <option value="">Factura Electronica</option>
          </select>
        </div>
      </div>
    </div>

    <!--
      w-1/4	width: 25%;
      w-2/4	width: 50%;
      w-3/4	width: 75%;
      w-1/5	width: 20%;
      w-2/5	width: 40%;
      w-3/5	width: 60%;
      w-1/6	width: 16.666667%;
      w-2/6	width: 33.333333%;
      w-3/6	width: 50%;
      w-4/6	width: 66.666667%;
      w-1/12	width: 8.333333%;
      w-2/12	width: 16.666667%;
      w-3/12	width: 25%;
      w-4/12	width: 33.333333%;
    -->

    <!-- Border  -->
    <div class=" overflow-hidden shadow-lg rounded-md
      mt-2 p-5 bg-white">

      <!-- Primera Fila -->
      <div class="flex flex-col md:flex-row flex-grow">

        <!-- DNI w-1/5	width: 20%; -->
        <div class="md:w-1/5">
          <div class="md:mr-2 mb-1">
            <input type="text" class="w-full p-1 border rounded text-gray-700 text-sm" placeholder="DNI: 42516253">
          </div>
        </div>

        <!-- w-2/5	width: 40%; -->
        <div class="md:w-2/5">
          <div class="md:mr-2 mb-1">
            <input type="text" class="w-full p-1 border rounded text-gray-700 text-sm"
                   placeholder="Razon o Nombre: Abraham Moises Linares">
          </div>
        </div>

        <!-- w-2/5	width: 40%; -->
        <div class="md:w-2/5">
          <div class="mb-0">
            <input type="text" class="w-full p-1 border rounded text-gray-700 text-sm"
                   placeholder="Direccion: Cm 40 Lt 15 Mz 213 Ciudad Nueva">
          </div>
        </div>
      </div>

      <!-- Segunda Fila -->
      <div class="flex flex-col md:flex-row flex-grow justify-end md:mb-1">

        <!-- w-1/6	width: 16.666667%; -->
        <div class="md:w-1/6 mt-3 md:mt-0">
          <div class="md:ml-2">
            <button class="text-sm text-gray-500 font-semibold bg-gray-200 px-2 py-1 w-full rounded">
              <i class="fas fa-plus"></i> Items
            </button>
          </div>
        </div>

      </div>


      <!--
        Producto  5
        unidad  1
        cantidad 1
        precio sin igv 2
        igv 1
        precio con igv 2
      -->
      <!-- Items Responsive -->
      <div class="flex flex-col md:flex-row flex-grow bg-gray-50 rounded mt-3 md:mt-0">

        <!-- Grupo de 5 -->
        <div class="md:w-5/12 flex">
          <!-- Productos -->
          <div class="w-full md:mb-0">
            <div class="md:mr-2">
              <input type="text" class="w-full p-1 border rounded text-gray-700 text-sm bg-gray-50 hover:bg-white"
                     placeholder="Quesillo Parmesano urbano  (gr)">
            </div>
          </div>
        </div>

        <!-- Grupo de 2 -->
        <div class="md:w-2/12 flex mt-1 md:mt-0">

          <!-- Cantidad -->
          <div class="w-6/12">
            <div class="">
              <input type="text" class="w-full p-1 border rounded text-right font-semibold text-gray-700
                hover:bg-white text-sm bg-gray-50"
                     placeholder="700">
            </div>
          </div>

          <!-- Unidad -->
          <div class="w-6/12">
            <div class="ml-2">
              <select name="" id="" class="p-1 border rounded-md w-full
                text-gray-400 font-semibold text-sm
                bg-gray-50">
                <option value="">gr</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Grupo de tres -->
        <div class="md:w-5/12 flex mt-1 md:mt-0">
          <!-- Precio Compra -->
          <div class="w-2/5">
            <div class="md:ml-2 mr-2">
              <input type="text" class="w-full p-1 border rounded text-right
                hover:bg-white text-gray-700 text-sm bg-gray-50"
                     placeholder="5000.00">
            </div>
          </div>

          <!-- Precio Igv -->
          <div class="w-1/5">
            <div class="">
              <input type="text" class="w-full p-1 border rounded text-right text-gray-700 text-sm bg-gray-50"
                     disabled placeholder="500.12">
            </div>
          </div>

          <!-- Precio Total -->
          <div class="w-2/5">
            <div class="ml-2">
              <input type="text" class="w-full p-1 border rounded text-right text-gray-700 text-sm bg-gray-50"
                     disabled placeholder="6500.00">
            </div>
          </div>
        </div>
      </div>


      <!-- Totales -->
      <div>
        <!-- Operaciones Gravadas -->
        <div class="flex justify-end items-center mt-1 md:mt-0">
          <div>
            <span class="text-sm font-semibold text-gray-400">Op. Gravadas</span>
          </div>
          <div class="w-2/5 md:w-2/12 ">
            <div class="ml-2">
              <input type="text" class="w-full p-1 border rounded text-right
              text-gray-700 text-sm bg-gray-100" disabled placeholder="6500.00">
            </div>
          </div>
        </div>

        <!-- IGV -->
        <div class="flex justify-end items-center mt-1 md:mt-0">
          <div>
            <span class="text-sm font-semibold text-gray-400">I.G.V</span>
          </div>
          <div class="w-2/5 md:w-2/12 ">
            <div class="ml-2">
              <input type="text" class="w-full p-1 border rounded text-right
              text-gray-700 text-sm bg-gray-100" disabled placeholder="6500.00">
            </div>
          </div>
        </div>

        <!-- Total -->
        <div class="flex justify-end items-center mt-1 md:mt-0">
          <div>
            <span class="text-sm font-bold text-gray-500">Total</span>
          </div>
          <div class="w-2/5 md:w-2/12 ">
            <div class="ml-2">
              <input type="text" class="w-full p-1 border rounded text-right
              text-gray-900 font-bold text-sm bg-gray-100" disabled placeholder="6500.00">
            </div>
          </div>
        </div>
      </div>

      <div class="flex items-center justify-center md:justify-end mt-6">
        <!-- Cacelar -->
        <div class="mr-2">
          <button class="px-3 p-2 bg-gray-600 rounded-md text-gray-200 font-semibold text-sm">
            <i class="fa fa-backspace"></i> Cancelar
          </button>
        </div>
        <!-- Enviar Documento -->
        <div>
          <button class="px-3 p-2 bg-indigo-600 rounded-md text-gray-100 font-semibold text-sm">
            <i class="fa fa-cloud-upload-alt"></i> Enviar Documento
          </button>
        </div>
      </div>

    </div>
  </div>
</div>