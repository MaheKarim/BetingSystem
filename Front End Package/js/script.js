import { Z_BLOCK } from "zlib";

(function ($) {
    'use strict';

    // Team selection----------------------
      var ctx = document.getElementById("Chart1a").getContext('2d');
      var Chart1a = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Australia", "Bangladesh"],
          datasets: [{
            label: 'Taken',
            data: [
                12, 
                19
            ],
            backgroundColor: [
              'rgba(255, 0, 0, 0.2)',
              'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
              'rgba(255, 0, 0, 1)',
              'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
            legend: {
                display: false
            },
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
    
    // batting bowling selection------------------
    
      var ctx = document.getElementById("Chart1b").getContext('2d');
      var Chart1b = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Batting First", "Bowling First"],
          datasets: [{
            label: 'Taken',
            data: [
                19, 
                30
            ],
            backgroundColor: [
              'rgba(255, 0, 255, 0.2)',
              'rgba(0, 255, 0, 0.2)'
            ],
            borderColor: [
              'rgba(255, 0, 255, 1)',
              'rgba(0, 255, 0, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
            legend: {
                display: false
            },
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
    
    // Macth 2 start here----------------------
    
    // Team selection----------------------
    var ctx = document.getElementById("Chart2a").getContext('2d');
    var Chart2a = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Australia", "Bangladesh"],
        datasets: [{
          label: 'Taken',
          data: [
              12, 
              19
          ],
          backgroundColor: [
            'rgba(255, 0, 0, 0.2)',
            'rgba(54, 162, 235, 0.2)'
          ],
          borderColor: [
            'rgba(255, 0, 0, 1)',
            'rgba(54, 162, 235, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
          legend: {
              display: false
          },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
    
    // batting bowling selection------------------
    
    var ctx = document.getElementById("Chart2b").getContext('2d');
    var Chart2b = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Batting First", "Bowling First"],
        datasets: [{
          label: 'Taken',
          data: [
              19, 
              12
          ],
          backgroundColor: [
            'rgba(255, 0, 255, 0.2)',
            'rgba(0, 255, 0, 0.2)'
          ],
          borderColor: [
            'rgba(255, 0, 255, 1)',
            'rgba(0, 255, 0, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
          legend: {
              display: false
          },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
    
    // Macth 3 start here----------------------
    
    // Team selection----------------------
    var ctx = document.getElementById("Chart3a").getContext('2d');
    var Chart3a = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Australia", "Bangladesh"],
        datasets: [{
          label: 'Taken',
          data: [
              12, 
              19
          ],
          backgroundColor: [
            'rgba(255, 0, 0, 0.2)',
            'rgba(54, 162, 235, 0.2)'
          ],
          borderColor: [
            'rgba(255, 0, 0, 1)',
            'rgba(54, 162, 235, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
          legend: {
              display: false
          },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
    
    // batting bowling selection------------------
    
    var ctx = document.getElementById("Chart3b").getContext('2d');
    var Chart3b = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Batting First", "Bowling First"],
        datasets: [{
          label: 'Taken',
          data: [
              19, 
              12
          ],
          backgroundColor: [
            'rgba(255, 0, 255, 0.2)',
            'rgba(0, 255, 0, 0.2)'
          ],
          borderColor: [
            'rgba(255, 0, 255, 1)',
            'rgba(0, 255, 0, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
          legend: {
              display: false
          },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
    
    // Macth 4 start here----------------------
    
    // Team selection----------------------
    var ctx = document.getElementById("Chart4a").getContext('2d');
    var Chart4a = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Australia", "Bangladesh"],
        datasets: [{
          label: 'Taken',
          data: [
              12, 
              19
          ],
          backgroundColor: [
            'rgba(255, 0, 0, 0.2)',
            'rgba(54, 162, 235, 0.2)'
          ],
          borderColor: [
            'rgba(255, 0, 0, 1)',
            'rgba(54, 162, 235, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
          legend: {
              display: false
          },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
    
    // batting bowling selection------------------
    
    var ctx = document.getElementById("Chart4b").getContext('2d');
    var Chart4b = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Batting First", "Bowling First"],
        datasets: [{
          label: 'Taken',
          data: [
              19, 
              12
          ],
          backgroundColor: [
            'rgba(255, 0, 255, 0.2)',
            'rgba(0, 255, 0, 0.2)'
          ],
          borderColor: [
            'rgba(255, 0, 255, 1)',
            'rgba(0, 255, 0, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
          legend: {
              display: false
          },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
    // run feeds popup
  

})(jQuery);