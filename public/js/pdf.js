function pdf(idCertificado, contratistaNombre, nitCustomer, idContract, tema, dateExp) {
    var doc = new jsPDF();
    
    doc.setFont("calibri");
    doc.setFontSize(16);

    var titulo = "Certificado de Contrato";
    var anchoTitulo = doc.getStringUnitWidth(titulo) * doc.internal.getFontSize() / doc.internal.scaleFactor;
    var xTitulo = (doc.internal.pageSize.width - anchoTitulo) / 2; 
    doc.text(xTitulo, 20, titulo);

    doc.setFont("calibri");
    doc.setFontSize(12);

    var contenido = `Este certificado, identificado con el número ${idCertificado}, valida el contrato suscrito entre las partes involucradas.
    
Id del Certificado: ${idCertificado}
NIT del Cliente: ${nitCustomer}
Contratista: ${contratistaNombre}
Contrato: ${idContract}
Tema: ${tema}
Fecha de Expedición: ${dateExp}

Este certificado atestigua la autenticidad del contrato y la aceptación de las condiciones establecidas. Ambas partes, el cliente y el contratista, se comprometen a cumplir con las cláusulas acordadas en busca de un proyecto exitoso y en conformidad con los más altos estándares de calidad y responsabilidad.`;

    var linesPerPage = Math.floor((doc.internal.pageSize.height - 40) / 12);

    var lineas = doc.splitTextToSize(contenido, doc.internal.pageSize.width - 40);

    for (var i = 0; i < lineas.length; i += linesPerPage) {
        var paginaActual = Math.floor(i / linesPerPage) + 1;

        doc.text(20, 40, lineas.slice(i, i + linesPerPage).join('\n'));
        if (i + linesPerPage < lineas.length) {
            doc.addPage();
        }
    }

    doc.save('Certificado_Contrato.pdf');
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("generateCertificateBtn").addEventListener("click", function() {
        
        var idCertificado = document.getElementById("idCertificado").value;
        var contratistaNombre = document.getElementById("idContratista").options[document.getElementById("idContratista").selectedIndex].text;
        var nitCustomer = document.getElementById("nitCustomer").value;
        var idContract = document.getElementById("idContract").value;
        var tema = document.getElementById("tema").value;
        var dateExp = document.getElementById("dateExp").value;
        pdf(idCertificado, contratistaNombre, nitCustomer, idContract, tema, dateExp);
    });
});
