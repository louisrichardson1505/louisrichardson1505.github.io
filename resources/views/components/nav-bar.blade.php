<style>
  * {
    margin: 0 auto;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    color: #fff;
  }

  body {
    background-color: #1e1f22;
  }

  .nav-bar {
    margin-left: 80px;
    margin-top: 40px;
    margin-right: 80px;
  }

  .nav-border {
    /* background-color: aqua; */
    padding: 10px 10px;
    display: flex;
    justify-content: center;
    color: #fcf9d2;
  }

  .nav-border a {
    margin-right: 60px;
    font-size: 18px;
  }

  .hover-underline-animation {
    position: relative;
    color: #ffffff;
    text-decoration: none;
  }

  .hover-underline-animation::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #79f7f1;
    transform-origin: bottom right;
    transition: transform 0.4s ease-out;
  }

  .hover-underline-animation::after {
    transform: scaleX(0);
  }

  .hover-underline-animation:hover::after {
    transform: scaleX(1);
    transform-origin: bottom left;
  }

</style>

{{-- <script>
  function lightMode() {
    var element = document.body;
    element.classList.toggle("light-mode");
  }

</script> --}}

{{-- <link rel="stylesheet" href="nav-bar.css"> --}}

<div class="nav-bar">
  <div class="nav-border">
    <a href="/" class="hover-underline-animation">Homepage</a>
    <a href="/" class="hover-underline-animation">My Skills</a>
    <a href="/my-work" class="hover-underline-animation">My Work</a>
    <a href="/about-me" class="hover-underline-animation">About</a>
    <a href="/contact-me" class="hover-underline-animation">Contact</a>
    <a href="/" class="hover-underline-animation">CV</a>
    {{-- <button onclick="lightMode()">Too light?</button> --}}
  </div>
</div>
