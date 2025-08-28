//Executar funções só quando o documento estiver carregado
document.addEventListener('DOMContentLoaded', function(){
    //Armazenar todas as áreas extensíveis do nosso html em uma única variável
    let areasExtensiveis = document.querySelectorAll('.expand_content');

    //Iterar sobre cada área que existir no html com o foreach
    areasExtensiveis.forEach(function(areaExtensivel){
        let toggleButton = areaExtensivel.querySelector('.expand');

        toggleButton.addEventListener('click', function(){
            areaExtensivel.classList.toggle('active');
        })
    });
    
});