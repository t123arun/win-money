<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('front-end/style.css')}}">
    <title>WIN | MONEY</title>
  </head>
  <body>
      <div class="container-fluid balance_display">
          <p>Available balance: ₹ 0.00</p>
           <div class="btn btn-primary">Recharge</div>
           <div class="btn btn-light">Trend</div>
           <div class="btn btn-secondary">Reset</div>
      </div>
      <div class="container emerd">
          <p>Emerd</p>
      </div>
      <div class="container-fluid period-count">
          <div class="row">
              <div class="col-md-6">
                  <p><i class="bi bi-trophy"></i> Period</p>
                  <p>20220124449</p>
              </div>
              <div class="col-md-6">
                  <p><i class="bi bi-stopwatch"></i> Count Down</p>
                  <p id="time"></p>
              </div>
          </div>
      </div>
      <section id="class-disable">
      <div class="container-fluid three-btn">
          <div class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Join Green</div>
          <div class="btn btn-voilet" data-toggle="modal" data-target="#exampleModal">Join Voilet</div>
          <div class="btn btn-red" data-toggle="modal" data-target="#exampleModal">Join Red</div>
      </div>
      <div class="container number-button">
          <div class="row">
              <div class="col-md-2 mr-4 btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">0</div>
              <div class="col-md-2 mr-4 btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">1</div>
              <div class="col-md-2 mr-4 btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">2</div>
              <div class="col-md-2 mr-4 btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">3</div>
              <div class="col-md-2 mr-4 btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">4</div>
              <div class="col-md-2 mr-4 btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">5</div>
              <div class="col-md-2 mr-4 btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">6</div>
              <div class="col-md-2 mr-4 btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">7</div>
              <div class="col-md-2 mr-4 btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">8</div>
              <div class="col-md-2 mr-4 btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">9</div>
          </div>
      </div>
    </section>
      <div class="container emerd">
        <i class="bi bi-trophy"></i>
        <p>Emerd Record</p>
    </div>
    <div class="container">      
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Period</th>
                <th scope="col">Price</th>
                <th scope="col">Number</th>
                <th scope="col">Result</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($data as $i )
                 
             
              <tr>
                <th scope="row">{{$i->period}}</th>
                <td>{{$i->price}}</td>
                <td>{{$i->number}}</td>
                <td>{{$i->result}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    <div class="container">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">SELECT 0</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Contract Money</p>
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <button type="button" class="btn btn-secondary" id="ten">10</button>
                 
                </div>
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                  <button type="button" class="btn btn-secondary" id="hundred">100</button>
                 
                </div>
                <div class="btn-group mr-2" role="group" aria-label="Third group">
                  <button type="button" class="btn btn-secondary" id="thousand">1000</button>
                </div>
                <div class="btn-group" role="group" aria-label="Fourth group">
                    <button type="button" class="btn btn-secondary" id="tenThousand">10000</button>
                  </div>
              </div>

              <div class="container-fluid">
                  <div class="row">
                      <div class="col-sm-2 mr-4 btn btn-outline-dark" id="dec">-</div>
                      <div class="col-sm-2 mr-4 btn btn-outline-dark" id="num"></div>
                      <div class="col-sm-2 mr-4 btn btn-outline-dark" id="inc">+</div>
                  </div>
              </div>
              <form action="/" method="POST">
              @csrf
              <input type="text"  name="player_id" placeholder="001" value="001" hidden>
              <input type="text" name="period" placeholder="1234" value="1234" hidden>
              <input type="text" name="number" placeholder="8" value="8" hidden>
              <input type="text" name="price" placeholder="100" value="100" hidden>
              <p>Total contract money is <span id="sum"></span></p>
              <input type="checkbox" id="check" required>
              <label for="check">I agree <a href="/" class="presale">PRESALE RULE</a></label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
              <button type="submit" class="btn btn-primary">CONFIRM</button>
              </form> 
            </div>
          </div>
        </div>
      </div>
      <!-- <script>
        $(document).ready(function() {
    $('.class-disable *').prop('disabled', true);
});
      </script> -->
    <!-- Optional JavaScript; choose one of the two! -->
     <script src="{{url('front-end/main.js')}}"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>