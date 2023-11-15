function mostrarGraficoUno() {
    const endPoint = 'https://www.datos.gov.co/resource/6xsa-23re.json';
    var valor = [];
    var departamento = [];
    var div = document.getElementById('graficoUno');
    fetch(endPoint)
        .then(response => response.json())
        .then(data => {
            data.forEach(function (element) {
                if (element.valor != '' && element.departamento != '') {
                    valor.push(element.valor);
                    departamento.push(element.departamento);
                }
            });
            var trace1 = {
                x: departamento,
                y: valor,
                type: 'bar',
            };

            var data = [trace1];
            var layout = {
                width: 1200,
                height: 350,
                title: 'Concepción de contratos con respecto a los departamentos según su valor.',
            };
            Plotly.newPlot(div, data, layout);

        })
        .catch(error => console.log(error));
}
