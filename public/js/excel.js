 async function fetchData() {
    // Aquí debes colocar la URL de tu API
    const apiUrl = 'https://www.datos.gov.co/resource/qvyf-eixy.json';
    
    try {
      const response = await fetch(apiUrl);
      const data = await response.json();
      return data;
    } catch (error) {
      console.error('Error al obtener datos desde la API', error);
      throw error;
    }
  }

  function groupBy(array, key) {
    return array.reduce((result, currentItem) => {
      (result[currentItem[key]] = result[currentItem[key]] || []).push(currentItem);
      return result;
    }, {});
  }

  function generarReporte() {
    fetchData()
      .then(data => {
        const groupedData = groupBy(data, 'equipo');
  
        const workbook = XLSX.utils.book_new();
  
        Object.keys(groupedData).forEach(equipo => {
          const formattedData = groupedData[equipo].map(item => ({
            equipo: item.equipo,
            categoria: item.categoria,
            cantidad: item.cantidad
          }));
  
          const worksheet = XLSX.utils.json_to_sheet(formattedData);
  
          // Añadir estilos a la tabla
          worksheet['!cols'] = [
            { width: 20 },
            { width: 20 },
            { width: 15 }
          ];
  
          worksheet['!rows'] = [{ hpt: 20 }];
  
          const cellStyle = {
            font: { bold: true },
            alignment: { horizontal: 'center' },
            border: { top: { style: 'thin' }, bottom: { style: 'thin' } },
            fill: { bgColor: '#F2F2F2' }
          };
  
          worksheet['A1'].s = cellStyle;
          worksheet['B1'].s = cellStyle;
          worksheet['C1'].s = cellStyle;
  
          XLSX.utils.book_append_sheet(workbook, worksheet, equipo);
        });
  
        const today = new Date();
        const filename = `Reporte_${today.getFullYear()}${today.getMonth() + 1}${today.getDate()}.xlsx`;
  
        XLSX.writeFile(workbook, filename);
      })
      .catch(error => {
        alert('Error al generar el reporte.');
      });
  }