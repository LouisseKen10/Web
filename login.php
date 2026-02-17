<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>OhSnap — School Photography</title>

  <link rel="stylesheet" href="login.css?v=9">
</head>
<body>
  <main class="hero">
    <a class="logo" href="#">
      <img class="logo-img" src="img/logo.png" alt="QueCare logo" />
      <h2>QueCare</h2>
    </a>

    <section class="content">
      <p class="head-line">WELCOME TO</p>
      <p class="head-line">QueCare</p>
      <p class="tagline">You care, I care, QueCare</p>

      <form class="login" onsubmit="event.preventDefault(); window.location.href='home.php';">
        <div class="field-wrap">
          <input class="email" type="email" placeholder="Enter email to log-in" required />
        </div>
        <button class="btn" type="submit">ENTER</button>
      </form>
    </section>
  </main>
</body>
</html>