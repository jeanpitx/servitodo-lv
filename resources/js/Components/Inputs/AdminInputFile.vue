<template>
    <div class="mb-2">
        <div class="dark:bg-blueGray-700 relative h-36 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
            <div class="select-file absolute">
                <div class="flex flex-col items-center"> 
                    <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> 
                    <span class="block text-gray-400 font-normal">Arrastre sus archivos aquí</span> 
                    <span class="block text-gray-400 font-normal">o</span> 
                    <span class="block text-blue-400 font-normal">Seleccione archivo</span> 
                </div>
            </div> 
            <div class="selected-file absolute mt-2" style="display:none">
                <div class="dropzone__item dropzone--has-thumbnail dropzone--success dropzone__item--style">
                    <div class="dropzone__item-thumbnail">
                        <img :src="happyfile">
                    </div>
                    <div class="dropzone__item-controls">
                        <div class="dropzone__item-control">
                            <i class="fas fa-times mr-1 text-gray-500"></i>
                        </div>
                    </div>
                    <div class="dropzone__success-mark">
                        <i class="gg-check-o"></i>
                    </div>
                    <div class="dropzone__details dropzone__details--style">
                        <div class="dropzone__file-size">
                            <span>
                                <strong>69.4</strong> KB
                            </span>
                        </div>
                        <div class="dropzone__filename">
                            <span>IMG FONDO BCM.jpg</span>
                        </div>
                    </div>
                </div> 
            </div> 

            <input type="file" class="dropzone__input h-full w-full opacity-0" :name="name" :id="id" :accept="accept"/>
        </div>
        <div class="flex justify-between items-center text-gray-400 mt-0 ml-2"> 
            <span>
                Tipo de archivo aceptado: Imagen
                <span class="nametext text-green-500"></span>
            </span> 
            <span class="flex items-center ">
                <i class="fa fa-lock mr-1"></i> secure
            </span>
        </div>
    </div>
</template>

<script>
import $ from 'jquery';
import happyfile from "@/assets/img/happy-file.png";

export default {
    data() {
        return {
            happyfile,
        };
    },
    props: ['name','id','accept','src'],

    mounted: function () {
        if(this.src){
            $(".dropzone__item-thumbnail img").attr("src",this.src);
            $(".dropzone__filename span").html("Categoría actual");
            $(".dropzone__file-size span").html("Categoría");
            $(".select-file").hide();
            $(".selected-file").show();
        }
        $(".dropzone__input").change(function(e){
            // Creamos el objeto de la clase FileReader
            let reader = new FileReader();
            // Leemos el archivo subido y se lo pasamos a nuestro fileReader
            reader.readAsDataURL(e.target.files[0]);
            // Le decimos que cuando este listo ejecute el código interno
            reader.onload = function(){
                var imgfile=happyfile;
                var size=(e.target.files[0].size / 1000).toFixed(2);
                $(".dropzone__item-thumbnail img").attr("src",e.target.files[0].type.includes("image")?reader.result:imgfile);
                $(".dropzone__filename span").html(e.target.files[0].name);
                $(".nametext").html(", Archivo cargado: " + e.target.files[0].name);
                $(".dropzone__file-size span").html("<strong>" +(size>1000? (size/1000).toFixed(2): size)+ "</strong> " + (size>1000?"MB":"KB"));
                $(".select-file").hide();
                $(".selected-file").show();
            };
        });

        $(".dropzone__item-control").click(function() {
            $(".dropzone__input").val("");
            $(".select-file").show();
            $(".selected-file").hide();
        });
    }
};
</script>
