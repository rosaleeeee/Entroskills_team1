<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MBTI Quiz - Start</title>
        <link rel="stylesheet" href="{{ asset('mbti_quiz.css') }}">
        <style>
            .progress-bar-container {
        width: 50%; /* Taille de la barre, ajustable */
        margin: 20px auto; /* Centrage horizontal grâce à auto */
        background-color: #e0e0e0;
        border-radius: 10px;
        height: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Légère ombre pour un meilleur design */
    }

    .progress-bar {
        height: 100%;
        background-color: #4caf50;
        width: 0%; /* Progression initiale */
        border-radius: 10px;
        transition: width 0.3s ease-in-out;
        </style>
    </head>
    <body>
        @include('layouts.sidebar')
        <div class="quiz-container">
            <div class="bheader">
                <h1 class="big1">We would like to know more about you</h1>
                <img class="imgtest" src="{{ asset('all_mbti/question-mark1.png') }}" alt="">
            </div>

            <div class="progress-bar-container">
                <div class="progress-bar" id="progressBar"></div>
            </div>

            @if ($errors->any())
                <div>
                    <ul class="error-message">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('quiz.submitStart') }}" method="POST" id="quizFormStart">
                @csrf
                @foreach ($questions as $question => $answers)
                    @php
                        $key = str_replace(' ', '_', strtolower($question));
                    @endphp
                    <div class="question">
                        <p>{{ $question }}</p>
                        <div class="answers">
                            @foreach($answers as $answer => $type)
                                <button type="button" class="answer-button" data-question="{{ $key }}" data-answer="{{ $type }}">{{ $answer }}</button>
                            @endforeach
                            <input type="hidden" name="{{ $key }}" value="">
                        </div>
                    </div>
                @endforeach
                <div class="center-buttons">
                    <button type="submit" class="submit-button1">Done</button>
                </div>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                const totalQuestions = {{ count($questions) }};
                let answeredQuestions = 0;

                $('.answer-button').click(function() {
                    const questionKey = $(this).data('question');
                    const answerValue = $(this).data('answer');

                    // Update the button selection
                    const questionButtons = $('[data-question="' + questionKey + '"]');
                    if (!$('input[name="' + questionKey + '"]').val()) {
                        answeredQuestions++;
                    }
                    questionButtons.removeClass('selected');
                    $(this).addClass('selected');

                    // Update the hidden input value
                    $('input[name="' + questionKey + '"]').val(answerValue);

                    // Update the progress bar
                    const progressPercent = (answeredQuestions / totalQuestions) * 100;
                    $('#progressBar').css('width', progressPercent + '%');
                });
            });
        </script>
    </body>
    </html>
</x-app-layout>
