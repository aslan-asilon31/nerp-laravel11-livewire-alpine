<div>

  <!-- ./HightChart -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/series-label.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <script src="https://code.highcharts.com/highcharts-more.js"></script>
  <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>

  <script src="https://code.highcharts.com/modules/data.js"></script>

  @section('title', 'Dashboard welcome')
  <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">


            <div
              class="col-span-12 rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-8">
              
                <figure class="">
                  <img src="{{ asset('banner-nerp/banner-welcome.png') }}" alt="" srcset="">
                </figure>
            </div>


    <!-- ====== Chart One Start -->
    <div
      class="col-span-12 rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-8">
      <div class="flex flex-wrap items-start justify-between gap-3 sm:flex-nowrap">

        <div class="flex w-full max-w-55 justify-end">
          <div class="inline-flex items-center rounded-md bg-whiter p-1.5 dark:bg-meta-4">
            <button
              class="rounded bg-white px-3 py-1 text-xs font-medium text-black shadow-card hover:bg-white hover:shadow-card dark:bg-boxdark dark:text-white dark:hover:bg-boxdark">
              Day
            </button>
            <button
              class="rounded px-3 py-1 text-xs font-medium text-black hover:bg-white hover:shadow-card dark:text-white dark:hover:bg-boxdark">
              Week
            </button>
            <button
              class="rounded px-3 py-1 text-xs font-medium text-black hover:bg-white hover:shadow-card dark:text-white dark:hover:bg-boxdark">
              Month
            </button>
          </div>
        </div>
      </div>
      <div>
        <figure class="highcharts-figure">
          <div id="container-top-10-item-based-on-value"></div>
        </figure>
      </div>
    </div>
    <!-- ====== Chart One End -->



    <div
      class="col-span-12 rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-5">

      <!-- ====== Chart Two Start -->
      <div
        class="col-span-12 rounded-sm border border-stroke bg-white  shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-12">
        <div>
          <figure class="highcharts-figure">
            <div id="container-turnover-days-by-month"></div>
          </figure>
        </div>
      </div>
      <!-- ====== Chart Two End -->

    </div>



  </div>

  <script>
    //Top 10 item based on value
    // Data retrieved from: https://ferjedatabanken.no/statistikk
    Highcharts.chart('container-top-10-item-based-on-value', {
      chart: {
        type: 'bar'
      },
      title: {
        text: 'Top 10 item based on value'
      },
      xAxis: {
        categories: ['Item A', 'Item B', 'Item C', 'Item D', 'Item E', 'Item F',
          'Item G', 'Item G', 'Item H', 'Item I',
        ]
      },
      yAxis: {
        min: 0,
        title: {
          text: ''
        }
      },
      legend: {
        reversed: true
      },
      plotOptions: {
        series: {
          stacking: 'normal',
          dataLabels: {
            enabled: true
          }
        }
      },
      series: [{
        name: 'Top 10 item based on value',
        color: '#6A0DAD',
        data: [74, 27, 52, 93, 1272, 145, 337, 237, 428, 496]
      }]
    });

    // END Top 10 item based on value
  </script>


  <script>
    // Turn Over Days by Month
    Highcharts.chart('container-turnover-days-by-month', {
      chart: {
        type: 'areaspline'
      },
      title: {
        text: 'Turnover (Days) by Month',
        align: 'left'
      },
      subtitle: {
        text: 'By: AslanAsilon',
        align: 'left'
      },
      legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 120,
        y: 70,
        floating: true,
        borderWidth: 1,
        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#80080'
      },
      xAxis: {
        categories: ['January', 'February', 'March', 'April', 'May', 'June',
          'July', 'August', 'September', 'October', 'November', 'December'
        ],
        plotBands: [{
          from: 0,
          to: 2, // Highlighting the first quarter (January to March)
          color: 'rgba(68, 0, 128, .2)', // Ubah varian warna purple
          label: {
            text: 'High Season',
            align: 'center',
            style: {
              color: 'gray'
            }
          }
        }, {
          from: 5,
          to: 8, // Highlighting the middle months (June to September)
          color: 'rgba(170, 0, 128, .2)', // Ubah varian warna purple
          label: {
            text: 'Mid Season',
            align: 'center',
            style: {
              color: 'gray'
            }
          }
        }, {
          from: 10,
          to: 11, // Highlighting the last months (November to December)
          color: 'rgba(213, 0, 128, .2)', // Ubah varian warna purple
          label: {
            text: 'Low Season',
            align: 'center',
            style: {
              color: 'gray'
            }
          }
        }]
      },
      yAxis: {
        title: {
          text: 'Turnover (Days) by Month'
        }
      },

      tooltip: {
        shared: true,
        headerFormat: '<b>Turnover (Days) by Month {point.x}</b><br>'
      },
      credits: {
        enabled: false
      },

      series: [{
        name: 'Turnover (Days) by Month',
        data: [82, 93.2, 9.1, 9.34, 12.9, 13.3, 13.2, 12.3, 14.2, 12, 11., 9.5]
      }]
    });
  </script>
