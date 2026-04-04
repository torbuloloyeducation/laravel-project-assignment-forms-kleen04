<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --primary:       #1c3056;
            --primary-light: #243d6b;
            --primary-dark:  #141f38;
            --accent:        #4f8ef7;
            --accent-hover:  #3b7ef0;
            --bg:            #0f1e38;
            --surface:       #1a2d4f;
            --surface-2:     #213660;
            --text:          #f0f4ff;
            --muted:         #7a93bc;
            --border:        rgba(255,255,255,0.08);
            --radius:        14px;
            --shadow:        0 8px 32px rgba(0,0,0,0.3);
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg);
            background-image:
                radial-gradient(ellipse at 20% 20%, rgba(79,142,247,0.08) 0%, transparent 60%),
                radial-gradient(ellipse at 80% 80%, rgba(28,48,86,0.6) 0%, transparent 60%);
            color: var(--text);
            min-height: 100vh;
        }

        main {
            max-width: 960px;
            margin: 0 auto;
            padding: 60px 24px;
        }

        h1 {
            font-family: 'Syne', sans-serif;
            font-size: 2.8rem;
            font-weight: 800;
            letter-spacing: -1px;
            color: var(--text);
            margin-bottom: 8px;
        }

        h2 {
            font-family: 'Syne', sans-serif;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text);
        }

        p { color: var(--muted); line-height: 1.7; font-size: 0.95rem; }

        .card {
            background: var(--surface);
            border-radius: var(--radius);
            padding: 36px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border);
        }

        label {
            display: block;
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--muted);
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 12px 16px;
            background: var(--surface-2);
            border: 1.5px solid var(--border);
            border-radius: 8px;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            color: var(--text);
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input::placeholder { color: var(--muted); }
        input:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(79,142,247,0.15);
        }

        button[type="submit"] {
            padding: 12px 32px;
            background: var(--accent);
            color: white;
            border: none;
            border-radius: 8px;
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s, box-shadow 0.2s;
            box-shadow: 0 4px 16px rgba(79,142,247,0.3);
        }

        button[type="submit"]:hover {
            background: var(--accent-hover);
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(79,142,247,0.4);
        }

        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 16px;
            font-size: 0.88rem;
            font-weight: 500;
            border: 1px solid transparent;
        }

        .alert-success {
            background: rgba(34,197,94,0.1);
            border-color: rgba(34,197,94,0.2);
            color: #86efac;
        }

        .alert-warning {
            background: rgba(234,179,8,0.1);
            border-color: rgba(234,179,8,0.2);
            color: #fde047;
        }

        .alert-error {
            background: rgba(239,68,68,0.1);
            border-color: rgba(239,68,68,0.2);
            color: #fca5a5;
        }

        ul { list-style: none; margin-top: 20px; display: flex; flex-direction: column; gap: 8px; }

        ul li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 18px;
            background: var(--surface-2);
            border-radius: 8px;
            border: 1px solid var(--border);
            font-size: 0.9rem;
            color: var(--text);
        }

        .btn-delete {
            padding: 6px 14px;
            background: transparent;
            color: #f87171;
            border: 1.5px solid rgba(248,113,113,0.3);
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-delete:hover {
            background: rgba(239,68,68,0.15);
            border-color: #f87171;
        }

        .divider {
            border: none;
            border-top: 1px solid var(--border);
            margin: 36px 0;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        @media (max-width: 600px) {
            .grid-2 { grid-template-columns: 1fr; }
            h1 { font-size: 2rem; }
        }
    </style>
</head>
<body>
    <x-navbar />
    <main>
        {{ $slot }}
    </main>
</body>
</html>