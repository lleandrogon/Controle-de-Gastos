window.onload = function() {
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Saldo', 'Gastos'],
            datasets: [{
                label: 'Distribuição de Gastos',
                data: [saldo, gastos], 
                backgroundColor: ['#4fa3f7', '#ffa500'],
                borderColor: '#ffffff',
                borderWidth: 3,
                hoverBackgroundColor: ['#4fa3f7', '#ffa500'],
                hoverBorderColor: '#ffffff',
                hoverBorderWidth: 4,
            }]
        },
        options: {
            responsive: true,
            cutout: '60%',
            animation: {
                animateRotate: true,
                animateScale: true,
                duration: 1500,
            },
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        font: {
                            size: 20,
                            weight: 'bold',
                        },
                        padding: 20,
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.7)',
                    titleFont: {
                        size: 16,
                    },
                    bodyFont: {
                        size: 14,
                    },
                    padding: 10,
                }
            }
        }
    });

    const ctxBar = document.getElementById('myBarChart');

    new Chart(ctxBar, {
        type: 'line',
        data: {
            labels: ['Saldo'],
            datasets: [{
                label: 'Saldo',
                data: [saldo, gastos],
                backgroundColor: '#4fa3f7',
                borderColor: '#ffffff',
                borderWidth: 2,
                pointRadius: 8,
                pointHoverRadius: 10,
                pointBackgroundColor: '#4fa3f7',
                pointBorderColor: '#ffffff',     
                pointBorderWidth: 2              
            }, {
                label: 'Gastos',
                data: [gastos],
                backgroundColor: '#ffa500',
                borderColor: '#ffffff',
                borderWidth: 2,
                // Configurações dos pontos (amarelos)
                pointRadius: 8,          // Tamanho normal
                pointHoverRadius: 10,    // Tamanho ao passar o mouse
                pointBackgroundColor: '#ffa500',
                pointBorderColor: '#ffffff',
                pointBorderWidth: 2
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 100,
                        font: {
                            size: 16,
                            weight: 'bold',
                            family: "'Arial', sans-serif"
                        },
                        callback: function(value) {
                            return 'R$ ' + value.toFixed(2).replace('.', ',');
                        }
                    },
                    title: {
                        display: true,
                        text: 'Valores (R$)',
                        font: {
                            size: 16,
                            weight: 'bold'
                        }
                    }
                },
                x: {
                    ticks: {
                        font: {
                            size: 16,
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        font: {
                            size: 20,
                            weight: 'bold',
                        },
                        padding: 20,
                    }
                },
                tooltip: {
                    bodyFont: {
                        size: 16
                    },
                    titleFont: {
                        size: 18
                    }
                }
            }
        }
    });
}
