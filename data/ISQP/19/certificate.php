
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<style>


* {
  box-sizing: border-box;
  &::before,
  &::after {
    border-box: inherit;
  }
}

.app {
  position: relative;
  /* padding-left: .5em; */
  max-width: 60em;
  padding-top: 100px;
  /* background: hsl(220, 35%, 76%) 100% linear-gradient(hsl(252, 2%, 42%) 0%, hsl(0, 5%, 30%) 50%, hsl(220, 35%, 76%) 50%, hsl(220, 35%, 76%) 100%); */
  background-size: auto 10em ;
  background-repeat: repeat-x;
  background-position: center top;
}


nav {
  display: flex;
  padding: 1.5em var(--var-padding);
  grid-row: 1;
  background: #fff;
  border-top-left-radius: 25px;
  border-top-right-radius: 25px;

  a {
    display: block;
    color: #333;
    text-decoration: none;
    border-bottom: 1px solid #333;
  }

  a + a {
    margin-left: 2em;
  }


  a[aria-current] {
    border-bottom: 2px solid var(--highlight);
  }
}

main {
  padding: var(--var-padding);
  grid-row: 2;
  grid-column: 1;
  background: #fff;
  border-bottom-left-radius: 25px;
  border-bottom-right-radius: 25px;

  h1 {
    margin-top: 0;
    text-align: center;
    font-weight: normal;

    span {
      display: block;
      color: var(--highlight);
      font-weight: bolder;
    }

    sub {
      font-size: .5em;
    }
  }

  a {
    color: var(--highlight);
    text-decoration: none;

    &::after {
      margin-left: 1.5em;
      content: '→';
      vertical-align: baseline;
    }

    &:hover,
    &:focus {
      color: var(--highlight-dark);
    }

    &:hover::after,
    &:focus::after {
      margin-left: 2em;
    }
  }
}

html {
  min-height: 100vh;
  font-family: sans-serif;
  line-height: 1.5;
  background: #474266;
  background-repeat: no-repeat;
  background-size: cover;
}

body {
  margin: 0;
}

@media (min-width: 37.5em) {
  :root {
    --var-padding: 3em;
  }

  body {
    margin: 1em;
  }

  .app {
    display: grid;
    margin: 3em auto;
    grid-template-rows: 5em auto;
    /* grid-template-columns: 1.4fr 1fr; */
    /* padding-left: 2em; */
    background-size: auto;

    &::after {
      position: absolute;
      right: 1em;
      left: 1em;
      bottom: 0;
      z-index: -1;
      width: 95%;
      height: 200px;
      content: '';
      box-shadow: 0 0 5em hsl(22, 23%, 40%);
    }
  }

  header {
    height: auto;

    a {
      right: var(--logo-offset);
      left: auto;
    }
  }

  nav {
    justify-content: space-between;
  }

  main {
    min-width: var(--main-column-width);
  }
}

</style>
<div class="app">
  <nav>
    <a href="#" aria-current="page"><img src="https://ceconline.ga/wp-content/uploads/2018/11/cec_logo_300.png" alt="" width="58px"></a>
    <a href="#"><img src="https://ieeecs-media.computer.org/wp-media/2018/04/02183615/IEEE-CS_LogoTM-orange-300x103.png" alt="" width="100px"></a>
  </nav>
  <main>
    <h1 style="text-align:center;">Certificate of Appreciation</h1>
    <p style="text-align:center;">This certificate is to recognize</p>
    <h1 style="text-align:center;"><?php echo $json -> $userID[0] ?></h1>
    <p style="text-align:center;">for securing <b><?php echo $json -> $userID[1] ?></b> during Hack19,
organised by IEEE Computer Society Student Branch Chapter College of Engineering Chengannur</p>
  </main>
</div>
</body>
</html>
