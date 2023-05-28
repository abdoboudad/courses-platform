@extends('panel.index')
@section('content')

    <div id="title">
        <h1>Dashboard</h1>
    </div>
    <div id="cards">   
        <div class="card">
            <div class="details">   
                <h3>Students</h3>
                <span>{{ $students->count() }}</span>
            </div>
            <div class="card_icon">
                <i class="fa-sharp fa-solid fa-users fa-2xl"></i>
            </div>  
        </div>
        <div class="card">
            <div class="details">   
                <h3>Courses</h3>
                <span>{{ $courses->count() }}</span>
            </div>
            <div class="card_icon">
                <i class="fa-solid fa-book fa-2xl"></i>
            </div>  
        </div>
        <div class="card">
            <div class="details">   
                <h3>Teatchers</h3>
                <span>{{ $teachers->count() }}</span>
            </div>
            <div class="card_icon">
                <i class="fa-solid fa-person-chalkboard fa-2xl"></i>    
            </div>  
        </div>
    </div>
    <div id="charts">
      <div>
        <canvas id="myChart"></canvas>
      </div>
      <div>
        <canvas id="myChart2"></canvas>
      </div>
    </div>

      
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
      <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
              label: '# of Votes',
              data: [12, 19, 3, 5, 2, 3],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
        
        
      </script>
      <script>
       var ctx2 = document.getElementById('myChart2').getContext('2d');
        var myChart = new Chart(ctx2, {
          type: 'line',
          data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
              label: 'My Dataset',
              data: [12, 19, 3, 5, 2, 3, 7],
              fill: false,
              borderColor: 'rgb(255, 99, 132)',
              tension: 0.1
            }]
          },
          options: {}
        });

      </script>
      

@endsection