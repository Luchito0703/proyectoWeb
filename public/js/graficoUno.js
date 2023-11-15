function mostrarGraficoUno() {
    const endPoint = 'https://www.datos.gov.co/resource/ji8i-4anb.json';
    var desercion = [];
    var departamento = [];
    var div = document.getElementById('graficoUno');
    fetch(endPoint)
        .then(response => response.json())
        .then(data => {
            data.forEach(function (element) {
                if (element.desercion != '' && element.departamento != '') {
                    desercion.push(element.desercion);
                    departamento.push(element.departamento);
                }
            });
            var trace1 = {
                x: departamento,
                y: desercion,
                type: 'bar',
            };

            var data = [trace1];
            var layout = {
                title: 'Tasa de deserción estudiantil en colegios por departamento (2011 - 2022)',
            };
            Plotly.newPlot(div, data, layout);

        })
        .catch(error => console.log(error));
}

function ocultarGraficoUno() {
    var div = document.getElementById('graficoUno');
    div.innerHTML = '';
}