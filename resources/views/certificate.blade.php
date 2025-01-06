<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Achievement</title>
    <!-- Google Fonts -->
    
    <style>
        /* Global Styles */
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f5faff, #e6f0ff);
            font-family: 'Raleway', sans-serif;
            color: #2c3e50;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            justify-content: space-between;
        }

        /* Buttons */
        .btn, .btnnext {
            padding: 15px 30px;
            font-size: 18px;
            text-decoration: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            
        }

        .btn:hover, .btnnext:hover {
            opacity: 0.8;
        }

        /* Download Button (Green, right side) */
        .btn {
            position: fixed;
            top: 20px;
            right: 30px;
            background-color: #28a745; /* Green */
            color: white;
            margin:10 px;
                }

        /* Next Button (Bottom Center) */
        .btnnext {
            position: fixed;
            bottom: 20px; /* Added space from the bottom */
            left: 50%;
            transform: translateX(-50%);
            background-color: #00aaff; /* Blue */
            color: white;
            margin-bottom: 30px; /* Added margin-bottom for space */
        }

        /* Certificate Container */
        .certificate-container {
            width: 90%;
            max-width: 900px;
            margin: 50px auto;
            background: #ffffff;
            border: 15px solid #0066cc;
            border-image: linear-gradient(135deg, #0066cc, #00aaff) 1;
            border-radius: 12px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
            padding: 50px 30px;
            position: relative;
            overflow: hidden;
        }

        /* Branding Ribbon */
        .branding-ribbon {
            position: absolute;
            top: 0;
            left: -50px;
            width: 150px;
            height: 150px;
            background: linear-gradient(45deg, #0066cc, #00aaff);
            transform: rotate(-45deg);
            color: white;
            font-size: 14px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            z-index: 10;
        }

        /* Header Section */
        .certificate-header h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 40px;
            font-weight: 700;
            color: #003366;
            text-transform: uppercase;
            margin: 20px 0;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .certificate-header img {
            width: 90px;
            margin-bottom: 10px;
        }

        /* Body Section */
        .certificate-body p {
            font-size: 18px;
            margin: 15px 0;
            color: #34495e;
        }

        .recipient-name {
            font-family: 'Montserrat', sans-serif;
            font-size: 36px;
            color: #0073e6;
            font-weight: bold;
            margin: 20px 0;
            text-shadow: 1px 1px 3px rgba(0, 115, 230, 0.3);
        }

        .program-name {
            font-size: 22px;
            font-weight: bold;
            color: #004080;
            margin-bottom: 25px;
            text-transform: uppercase;
        }

        /* Footer Section */
        .certificate-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 40px;
        }

        .certificate-footer .signature,
        .certificate-footer .date {
            font-size: 16px;
            color: #2c3e50;
            text-align: center;
        }

        .certificate-footer .signature {
            border-top: 2px solid #003366;
            width: 200px;
            padding-top: 10px;
            font-style: italic;
        }

        .qr-code {
            margin-top: 30px;
        }

        .qr-code img {
            width: 120px;
            height: 120px;
        }

        /* Watermark */
        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Montserrat', sans-serif;
            font-size: 100px;
            color: rgba(0, 64, 128, 0.03);
            user-select: none;
            z-index: -1;
            white-space: nowrap;
        }

        /* Subtle Animations */
        .certificate-container:hover {
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            transition: box-shadow 0.3s ease-in-out;
        }
    </style>
</head>
<body>

   @if(!$isPdf)
        <a href="{{ route('certificate.generate') }}" class="btn">Download Certificate</a>
    @endif
    <div class="certificate-container">
        <!-- Branding Ribbon -->
        <div class="branding-ribbon">Certificate</div>

        <!-- Header Section -->
        <div class="certificate-header">
            <h1>Certificate of Achievement</h1>
        </div>

        <!-- Body Section -->
        <div class="certificate-body">
            <p>This certifies that</p>
            <div class="recipient-name">{{ $name }}</div>
            <p>Has successfully completed the program</p>
            
            <p>MBTI Type: <strong>{{ $mbti }}</strong></p> <!-- Added MBTI -->
            <p>Job: <strong>{{ $job }}</strong></p> <!-- Added Job -->
            <p>Completion Date: <strong>{{ $completion_date }}</strong></p>
        </div>

        <!-- Footer Section -->
        <div class="certificate-footer">
            <div class="signature">Signature</div>
        </div>

        <!-- Watermark -->
        <div class="watermark">EntroSkills</div>
    </div>
@if(!$isPdf)
    <!-- Next Button at the bottom -->
    <button class="btnnext" onclick="window.location.href='fin'">Next</button>
@endif
</body>
</html>
