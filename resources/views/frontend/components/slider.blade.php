<style>
    /* Base Styles */
    .hero {
        padding: 80px 20px;
        text-align: center;
        background-color: #ffffff;
    }

    /* Text Styles */
    .hero h1,
    .hero p,
    .hero span {
        font-family: "Caveat", cursive !important;
    }

    .hero h1 {
        font-size: 6rem;
        font-weight: 900;
        font-style: normal;
    }

    .black-text {
        color: #222;
    }

    .highlight {
        background-image: url('public/images/img.svg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        padding: 5px 12px;
        border-radius: 8px;
    }

    .subtitle {
        font-size: 4rem;
        font-weight: 600;
    }

    .underline {
        text-decoration-thickness: 4px;
        background-image: url('public/images/img2.svg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    /* Buttons */
    .buttons {
        margin-top: 20px;
        display: flex;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .btn-primary,
    .btn-secondary {
        border: none;
        padding: 12px 20px;
        font-size: 1rem;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s ease-in-out;
    }

    .btn-primary {
        background-color: #6c445c;
        color: white;
    }

    .btn-secondary {
        background-color: #e7e5e7;
        color: #333;
    }

    /* Hover Effects */
    .btn-primary:hover {
        background-color: #532d46;
    }

    .btn-secondary:hover {
        background-color: #d5d3d5;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .hero h1 {
            font-size: 5rem;
        }

        .subtitle {
            font-size: 3.5rem;
        }
    }

    @media (max-width: 992px) {
        .hero {
            padding: 60px 15px;
        }

        .hero h1 {
            font-size: 4rem;
        }

        .subtitle {
            font-size: 3rem;
        }
    }

    @media (max-width: 768px) {
        .hero {
            padding: 50px 10px;
        }

        .hero h1 {
            font-size: 3rem;
        }

        .subtitle {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 576px) {
        .hero {
            padding: 40px 10px;
        }

        .hero h1 {
            font-size: 2.5rem;
        }

        .subtitle {
            font-size: 2rem;
        }

        .buttons {
            flex-direction: column;
            gap: 10px;
        }
    }
</style>

<section class="hero">
    <h1>
        <span class="black-text">All Your Needs, </span>
        <br class="d-lg-none" />
        <span class="highlight"><strong>One Smart Platform.</strong></span>
    </h1>
    <p class="subtitle">
        Simple, User friendly, yet <span class="underline">affordable!</span>
    </p>
    <div class="buttons">
        <button class="btn-primary">Start now - It's free</button>
        <button class="btn-secondary">Meet an advisor</button>
    </div>
</section>
