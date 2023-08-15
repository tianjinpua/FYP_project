@extends('layouts.nav')

@section('forum')

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Game Test</title>
        <link rel='icon' href="{{ asset('logo.png') }}">


        <link rel="stylesheet" href="../gametest.css">
        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../gametest.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Bootstrap CSS -->
    </head>

    <div class="container" id="ctn">
        <br>
        <br>

        <!-- Countdown timer -->
        <h2 id="times">TIMES</h2>
        <h2 id="timer">60</h2>
        <h2 id="timerA"></h2>


        <!-- Countdown controls -->
        <button class="startBtn" onclick="startTimer()" id="startButton" type="submit">Start</button><br>


        <div align="right" id="table">

        <form id="myForm" action="{{ url('gameTestEz') }}" method="post">
                {!! csrf_field() !!}

                <input type="hidden" name="score" id="scoreInput">
                <span id="score" class="form-control" style="width:50px; display:none;"></span><br>
                <input type="submit" value="Play Again" style="margin-top:-50px;">
            </form>
            <table>

                <tbody>
                    <tr>
                        <td>User Name</td>
                        <td>Score</td>
                    </tr>
                    

                    @foreach ($score->sortByDesc('score') as $news)
                        <tr>
                            <td>{{ Auth::user()->name }}</td>
                            <td>{{ $news->score }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            
        </div>

        <img src="{{ asset('images/icon.png') }}" alt="Crosshair" class="cursor" />
        <img src="{{ asset('ez.png') }}" alt="bloodspot" class="bloodspot" hidden />
        

        <script>
            var scoreSpan = document.getElementById("score");
            var scoreInput = document.getElementById("scoreInput");

            // Set the initial value of the input to the span's content
            scoreInput.value = scoreSpan.innerHTML;

            // Submit the form when the submit button is clicked
            document.getElementById("myForm").addEventListener("submit", function(event) {
                // Update the input value with the latest span content before submitting
                scoreInput.value = scoreSpan.innerHTML;


            });

            // Execute the updateScoreInput function when the form is submitted

            myForm.style.display = "none";

            document.getElementById('startButton').addEventListener('click', function() {});

            // Set the countdown duration (in seconds)
            var durationA = 60;
            var duration = 4;

            // Initialize the timer
            var timer;
            var timerA;
            var times;

            // Define the countdown function
            function countdown() {
                // Decrement the duration
                duration--;

                // Update the timer display
                document.getElementById("timer").innerHTML = duration;

                // Check if the countdown has finished
                if (duration <= 0) {
                    document.getElementById("timerA").innerHTML = durationA;
                    // Stop the timer

                    durationA--;

                    document.getElementById("timer").innerHTML = "Start!";

                    if (durationA <= -1) {
                        // Stop the timer
                        document.getElementById("timer").innerHTML = "Time's up!";
                        document.getElementById("times").innerHTML = "";
                        document.getElementById("timerA").innerHTML = "";
                        stopTimer();
                        // Display the "Time's up" message

                    }
                }
            }

            // Define the startTimer function
            function startTimer() {
                // Start the countdown

                timerA = setInterval(countdown, 1000);
                //startBtn.style.display="none";

                startBtn.innerText = "SCORE: " + score;
                startBtn.style.display = "none";
                table.style.display = "none";
            }
            let buttonClicked = false;

            // Define the stopTimer function
            function stopTimer() {
                // Stop the countdown
                clearInterval(timerA);
                startBtn.style.display = "inline";
                table.style.display = "inline";
                myForm.style.display = "inline";

                document.getElementById("score").innerHTML = score;

            }


            const container = document.querySelector("#ctn");
            const blooodspot = document.querySelector(".bloodspot");
            const startBtn = document.querySelector(".startBtn");

            const terrorist = document.createElement("img");
            terrorist.setAttribute("class", "terrorist1");
            terrorist.setAttribute("src", "ez.png");

            const contHeight = container.offsetHeight;
            const contWidth = container.offsetWidth;


            setInterval(() => {
                const randTop = Math.random() * (contHeight - 100);
                const randLeft = Math.random() * (contWidth - 100);

                terrorist.style.position = "absolute";
                terrorist.style.top = randTop + "px";
                terrorist.style.left = randLeft + "px";
                terrorist.style.display = "inline";

                if (duration >= 1) {
                    terrorist.style.display = "none";
                }

                if (durationA <= 0) {
                    terrorist.style.display = "none";
                }

            }, 1500);

            let count = 0;
            startBtn.addEventListener("click", function() {
                setInterval(function() {
                    count += 0;
                    timerText.textContent = count;
                }, 1000);

            });


            let score = 0;
            startBtn.addEventListener("click", () => {
                container.appendChild(terrorist);


            })
            window.addEventListener("click", (e) => {

                blooodspot.style.top = e.pageY + "px";
                blooodspot.style.left = e.pageX + "px";

                if (e.target == terrorist) {
                    terrorist.style.display = "none";
                    score++;
                    startBtn.innerText = "SCORE: " + score;

                } else(e.target == startBtn)
                score == 0;
                blooodspot.style.display = "none";


            });

            const cursor = document.querySelector(".cursor");
            window.addEventListener("mousemove", (e) => {
                cursor.style.top = e.pageY + "px";
                cursor.style.left = e.pageX + "px";

            });
        </script>

    </div>
@endsection
