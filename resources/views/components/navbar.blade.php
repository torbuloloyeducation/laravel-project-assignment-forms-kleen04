<style>
    @import url('https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Inter:wght@400;500&display=swap');

    .navbar {
        background: rgba(28, 48, 86, 0.85);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border-bottom: 1px solid rgba(255,255,255,0.07);
        padding: 0 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .nav-brand {
        font-family: 'Syne', sans-serif;
        font-weight: 800;
        font-size: 1.15rem;
        color: #f0f4ff;
        text-decoration: none;
        letter-spacing: -0.5px;
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 16px 12px;
    }

    .nav-brand span {
        width: 28px;
        height: 28px;
        background: #4f8ef7;
        border-radius: 6px;
        font-size: 0.8rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 800;
    }

    .navbar a:not(.nav-brand) {
        text-decoration: none;
        color: #7a93bc;
        font-family: 'Inter', sans-serif;
        font-size: 0.85rem;
        font-weight: 500;
        padding: 22px 12px;
        border-bottom: 2px solid transparent;
        transition: color 0.2s, border-color 0.2s;
        display: inline-block;
        white-space: nowrap;
    }

    .navbar a:not(.nav-brand):hover {
        color: #f0f4ff;
        border-bottom-color: #4f8ef7;
    }
</style>

<nav class="navbar">
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
    <a href="/services">Services</a>
    <a href="/showcases">Showcases</a>
    <a href="/blog">Blog</a>
    <a href="/formtest">Emails</a>
</nav>