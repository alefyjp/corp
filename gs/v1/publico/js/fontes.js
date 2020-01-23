$(document).ready(function(){
    /*************************************************************************************
     * OBTENDO TODAS AS MARCAS PARA GERAR O MENU DE FONTES
     *************************************************************************************/

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

        let respJson = JSON.parse(this.response);
    
        
        for(i=0; i<=respJson.length; i++)
        {
            document.getElementById("ul-menu-fontes").innerHTML+='<li><a href="http://corporativa.com.br/gs/v1/index.php/equipamentos/fontesMarca?m='+respJson[i].marca+'" class="btn btn-light"><i class="'+respJson[i].icone+'"></i> '+respJson[i].marca+'</a></li>';
        }
    }
    };
    xhttp.open("GET", "http://corporativa.com.br/gs/v1/index.php/equipamentos/fontesMenu", true);
    xhttp.send();

    /*************************************************************************************
     * OBTENDO TODAS AS FONTES DE UMA MARCA DE FONTE
    *************************************************************************************/

    $(".fontes").click(function(){
        
    });

});

