<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Migration Seeder</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col text-center">

                      <h1 class="my-5">
                        Laravel Migration Seeder
                      </h1>

                      <div class="d-flex flex-column align-items-center">
                        @foreach ($trains as $train)
                        <div class="card mb-3" style="width: 80%;">
                          <div class="card-header">
                              Code: {{ $train->train_code }}
                          </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">
                                  Departure station: {{ $train->departure }}
                              </li>
                              <li class="list-group-item">
                                  Departure date: {{ $train->departure_date }}
                              </li>
                              <li class="list-group-item">
                                  Departure hour: {{ $train->departure_hour }}
                              </li>
                          </ul>
                        </div>
                        @endforeach
                      </div>

                    </div>
                </div>
            </div>
        </main>

    </body>
</html>
