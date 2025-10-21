<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        
        <style>
            body { 
                font-family: 'Instrument Sans', sans-serif;
                background-color: #f0f9ff;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 1.5rem;
            }
            .dark body {
                background-color: #0a1929;
            }
            h1 {
                color: #2563eb !important;
                font-size: 2rem;
                font-weight: 600;
                margin-bottom: 2rem;
            }
            .container {
                max-width: 1200px;
                width: 100%;
            }
            .nav-container {
                display: flex;
                justify-content: flex-end;
                gap: 1rem;
                margin-bottom: 1.5rem;
            }
            .nav-link {
                display: inline-block;
                padding: 0.375rem 1.25rem;
                border: 1px solid #bfdbfe;
                color: #1e40af;
                border-radius: 0.25rem;
                font-size: 0.875rem;
                text-decoration: none;
                transition: all 0.2s;
            }
            .nav-link:hover {
                border-color: #3b82f6;
                background-color: #dbeafe;
            }
            .dark .nav-link {
                border-color: #1e3a8a;
                color: #93c5fd;
            }
            .dark .nav-link:hover {
                border-color: #3b82f6;
                background-color: #1e3a8a;
            }
            .main-content {
                display: flex;
                flex-direction: column-reverse;
                background: white;
                border-radius: 0.5rem;
                box-shadow: 0 0 0 1px rgba(59, 130, 246, 0.1);
                overflow: hidden;
            }
            .dark .main-content {
                background: #0f172a;
                box-shadow: 0 0 0 1px rgba(59, 130, 246, 0.2);
            }
            .text-content {
                padding: 1.5rem 1.5rem 3rem;
                font-size: 0.8125rem;
                line-height: 1.5;
            }
            .dark .text-content {
                color: #e2e8f0;
            }
            .text-content h2 {
                font-weight: 500;
                margin-bottom: 0.25rem;
                color: #1e40af;
            }
            .dark .text-content h2 {
                color: #93c5fd;
            }
            .text-content p {
                color: #64748b;
                margin-bottom: 0.5rem;
            }
            .dark .text-content p {
                color: #94a3b8;
            }
            .link-list {
                margin-bottom: 1rem;
            }
            .link-item {
                display: flex;
                align-items: center;
                gap: 1rem;
                padding: 0.5rem 0;
                position: relative;
            }
            .link-item::before {
                content: '';
                position: absolute;
                left: 0.4rem;
                top: 50%;
                bottom: 0;
                width: 1px;
                background: #bfdbfe;
            }
            .dark .link-item::before {
                background: #1e3a8a;
            }
            .link-item:last-child::before {
                display: none;
            }
            .dot-container {
                position: relative;
                padding: 0.25rem 0;
                background: white;
            }
            .dark .dot-container {
                background: #0f172a;
            }
            .dot-outer {
                width: 0.875rem;
                height: 0.875rem;
                border-radius: 50%;
                background: #f0f9ff;
                border: 1px solid #bfdbfe;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .dark .dot-outer {
                background: #0f172a;
                border-color: #1e3a8a;
            }
            .dot-inner {
                width: 0.375rem;
                height: 0.375rem;
                border-radius: 50%;
                background: #93c5fd;
            }
            .dark .dot-inner {
                background: #1e3a8a;
            }
            .external-link {
                color: #2563eb;
                text-decoration: underline;
                text-underline-offset: 4px;
                font-weight: 500;
                display: inline-flex;
                align-items: center;
                gap: 0.25rem;
            }
            .dark .external-link {
                color: #60a5fa;
            }
            .btn-primary {
                display: inline-block;
                padding: 0.375rem 1.25rem;
                background: #1e40af;
                border: 1px solid #1e40af;
                color: white;
                border-radius: 0.25rem;
                font-size: 0.875rem;
                text-decoration: none;
                transition: all 0.2s;
            }
            .btn-primary:hover {
                background: #1e3a8a;
                border-color: #1e3a8a;
            }
            .dark .btn-primary {
                background: #93c5fd;
                border-color: #93c5fd;
                color: #0a1929;
            }
            .dark .btn-primary:hover {
                background: #bfdbfe;
                border-color: #bfdbfe;
            }
            .image-section {
                background: #eff6ff;
                padding: 2rem;
                position: relative;
                overflow: hidden;
                aspect-ratio: 335/376;
            }
            .dark .image-section {
                background: #001e3c;
            }
            .logo-svg {
                color: #2563eb;
                width: 100%;
                transition: all 0.75s;
            }
            .dark .logo-svg {
                color: #3b82f6;
            }
            .decoration-svg {
                width: 448px;
                max-width: none;
                position: relative;
                margin-top: -4.9rem;
                margin-left: -2rem;
            }
            @media (min-width: 1024px) {
                .main-content {
                    flex-direction: row;
                }
                .text-content {
                    flex: 1;
                    padding: 5rem;
                }
                .image-section {
                    width: 438px;
                    flex-shrink: 0;
                    aspect-ratio: auto;
                }
                .decoration-svg {
                    margin-top: -6.6rem;
                    margin-left: 0;
                }
            }
        </style>
    </head>
    <body>
        <h1>Welcome To Laravel! 👋</h1>
        
        <div class="container">
            @if (Route::has('login'))
                <nav class="nav-container">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif

            <main class="main-content">
                <div class="text-content">
                    <h2>Let's get started</h2>
                    <p>Laravel has an incredibly rich ecosystem.<br>We suggest starting with the following.</p>
                    
                    <ul class="link-list">
                        <li class="link-item">
                            <span class="dot-container">
                                <span class="dot-outer">
                                    <span class="dot-inner"></span>
                                </span>
                            </span>
                            <span>
                                Read the
                                <a href="https://laravel.com/docs" target="_blank" class="external-link">
                                    <span>Documentation</span>
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor" stroke-linecap="square"/>
                                    </svg>
                                </a>
                            </span>
                        </li>
                        <li class="link-item">
                            <span class="dot-container">
                                <span class="dot-outer">
                                    <span class="dot-inner"></span>
                                </span>
                            </span>
                            <span>
                                Watch video tutorials at
                                <a href="https://laracasts.com" target="_blank" class="external-link">
                                    <span>Laracasts</span>
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor" stroke-linecap="square"/>
                                    </svg>
                                </a>
                            </span>
                        </li>
                    </ul>
                    
                    <a href="https://cloud.laravel.com" target="_blank" class="btn-primary">Deploy now</a>
                </div>

                <div class="image-section">
                    <svg class="logo-svg" viewBox="0 0 440 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.2036 -3H0V102.197H49.5189V86.7187H17.2036V-3Z" fill="currentColor"/>
                        <path d="M110.256 41.6337C108.061 38.1275 104.945 35.3731 100.905 33.3681C96.8667 31.3647 92.8016 30.3618 88.7131 30.3618C83.4247 30.3618 78.5885 31.3389 74.201 33.2923C69.8111 35.2456 66.0474 37.928 62.9059 41.3333C59.7643 44.7401 57.3198 48.6726 55.5754 53.1293C53.8287 57.589 52.9572 62.274 52.9572 67.1813C52.9572 72.1925 53.8287 76.8995 55.5754 81.3069C57.3191 85.7173 59.7636 89.6241 62.9059 93.0293C66.0474 96.4361 69.8119 99.1155 74.201 101.069C78.5885 103.022 83.4247 103.999 88.7131 103.999C92.8016 103.999 96.8667 102.997 100.905 100.994C104.945 98.9911 108.061 96.2359 110.256 92.7282V102.195H126.563V32.1642H110.256V41.6337Z" fill="currentColor"/>
                        <path d="M242.805 41.6337C240.611 38.1275 237.494 35.3731 233.455 33.3681C229.416 31.3647 225.351 30.3618 221.262 30.3618C215.974 30.3618 211.138 31.3389 206.75 33.2923C202.36 35.2456 198.597 37.928 195.455 41.3333C192.314 44.7401 189.869 48.6726 188.125 53.1293C186.378 57.589 185.507 62.274 185.507 67.1813C185.507 72.1925 186.378 76.8995 188.125 81.3069C189.868 85.7173 192.313 89.6241 195.455 93.0293C198.597 96.4361 202.361 99.1155 206.75 101.069C211.138 103.022 215.974 103.999 221.262 103.999C225.351 103.999 229.416 102.997 233.455 100.994C237.494 98.9911 240.611 96.2359 242.805 92.7282V102.195H259.112V32.1642H242.805V41.6337Z" fill="currentColor"/>
                        <path d="M438 -3H421.694V102.197H438V-3Z" fill="currentColor"/>
                        <path d="M139.43 102.197H155.735V48.2834H183.712V32.1665H139.43V102.197Z" fill="currentColor"/>
                        <path d="M324.49 32.1665L303.995 85.794L283.498 32.1665H266.983L293.748 102.197H314.242L341.006 32.1665H324.49Z" fill="currentColor"/>
                        <path d="M376.571 30.3656C356.603 30.3656 340.797 46.8497 340.797 67.1828C340.797 89.6597 356.094 104 378.661 104C391.29 104 399.354 99.1488 409.206 88.5848L398.189 80.0226C398.183 80.031 389.874 90.9895 377.468 90.9895C363.048 90.9895 356.977 79.3111 356.977 73.269H411.075C413.917 50.1328 398.775 30.3656 376.571 30.3656Z" fill="currentColor"/>
                    </svg>
                    
                    <svg class="decoration-svg" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="#1e40af" stroke="#1e3a8a" stroke-width="1"/>
                        <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="#1e40af" stroke="#1e3a8a" stroke-width="1"/>
                        <path d="M204.592 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#60a5fa" stroke="#1e3a8a" stroke-width="1"/>
                        <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#60a5fa" stroke="#1e3a8a" stroke-width="1"/>
                    </svg>
                </div>
            </main>
        </div>
    </body>
</html>