<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>XYZ School</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div style="background-color:#cbd5e0 ;">
        <nav class="fixed top-0 right-0 px-6 py-4 sm:block" style="display: flex;flex-direction: row;position: fixed;top: 0; left: 0; z-index: 9999; width: 100%; height: 50px; background-color: #1C658C">
            <a href="{{url('/')}}" class="ml-4" style="color:whitesmoke ;">Home</a>
            <a href="{{url('/admission')}}" class="ml-4" style="color:whitesmoke ;">Admission Form</a>
            <a href="{{url('/admissionresults')}}" class="ml-4" style="color:whitesmoke ;">Admission Result</a>
            <a href="{{url('/highlights')}}" class="ml-4" style="color:whitesmoke ;">Highlights</a>
        </nav>
        <div style="padding-top:70px; padding-left: 50px; padding-right: 50px;">
        <img src="/xyz school logo.png" alt="xyz School" style="height: 200px;width: 200px;transition: 1s">
            <div style="display: flex;flex-direction: row">
                <div style="color:#398AB9" style="padding-top:15cm ;">
                    <h2>Message from an Alumni</h2>
                    <p>This school actually helped me to become who I am now. I was really bad at physics first the teachers never
                        gave up on me and gave me every possible help to push me and make me the bettter version of myself. After 5 years
                        of graduating from the school, here I am, a two times Noble prize laureate.
                    </p>
                    <p>- Dr. Json Query</p>
                    <p>Alumni</p>
                    <p>2 times Noble Laureate (2021, 2022)</p>
                </div>
                <img src="\Dr.JsonLang.jpg" alt="principal" style="margin: 70px;height: 300px;width: 500px">
            </div>
        </div>
        <hr style="margin-top: 50px;margin-right: 100px;margin-left: 100px; color:#398AB9"></hr>
        <div style="padding-top:30px; padding-left: 50px; padding-right: 50px;">
            <div style="display: flex;flex-direction: row">
            <img src="/AnneHathaway.jpg" alt="principal" style="margin: 70px;height: 300px;width: 500px">
                <div style="color:#398AB9" style="padding-top:15cm ;">
                <h2>Message from an Alumni</h2>
                    <p>The acting club of the helped me a lot back in my childhood. It made me who I am today. The clubs of the school do 
                        help you out a lot. The first role I got was due to their push. I am forever gratefull.
                    </p>
                    <p>- Anne Hathaway</p>
                    <p>Alumni</p>
                    <p>2 times Oscar winner (2009, 2013)</p>
                </div>
            </div>
        </div>
        <hr style="margin-top: 50px;margin-right: 100px;margin-left: 100px; color:#398AB9"></hr>
        <div style="padding-top:30px; padding-left: 50px; padding-right: 50px;">
            <div style="display: flex;flex-direction: row">
                <div style="color:#398AB9" style="padding-top:15cm ;">
                <h2>Message from an Alumni</h2>
                    <p>I am extremely grateful to the music teacher and the music club for my early days as a singer. They made me realize 
                        that I have a talent for music and I never stopped since then. This school is made me what I am today.
                    </p>
                    <p>- Adele Laurie Blue Adkins</p>
                    <p>Alumni</p>
                    <p>18 times Grammy winner</p>
                </div>
                <img src="/adele.jpg" alt="principal" style="margin: 70px;height: 300px;width: 500px">
            </div>
        </div>
        <hr style="margin-top: 50px;margin-right: 100px;margin-left: 100px; color:#398AB9"></hr>
        <div style="padding-top:30px; padding-left: 50px; padding-right: 50px;">
            <div style="display: flex;flex-direction: row">
                <div style="color:#398AB9" style="padding-top:15cm ;">
                <h2>Some Other highlights</h2>
                    <p>- highest record in the Board exams</p>
                    <p>- Higest amout of graduates going to Harvard</p>
                    <p>- The Clubs have highest amount of alumni winning international recognition than any in the country</p>
                    <p>- Elon Mask's son will be admitted here. Mask promised us</p>
                </div>
            </div>
        </div>
        <hr style="margin-top: 50px;margin-right: 100px;margin-left: 100px; color:#398AB9"></hr>
    </div>

</body>

</html>