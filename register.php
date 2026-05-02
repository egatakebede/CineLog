<?php
// PHP logic comes later (backend phase)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CineLog — Create Account</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
</head>

<body class="auth-page">

  <div class="auth-wrap">

    <!-- ── LEFT PANEL ── -->
    <div class="auth-left">

      <div class="brand-logo">
        <div class="logo-mark">
          <svg viewBox="0 0 16 16">
            <rect x="2"   y="2" width="3" height="12"/>
            <rect x="6.5" y="2" width="3" height="12"/>
            <rect x="11"  y="2" width="3" height="12"/>
          </svg>
        </div>
        <div class="logo-text"><em>Cine</em>Log</div>
      </div>

      <!--
        Poster grid — different emoji order from login
        gives a fresh feel on the register page
      -->
      <div class="poster-grid">
        <div class="pg-cell pg-action">🔥</div>
        <div class="pg-cell pg-romance">❤️</div>
        <div class="pg-cell pg-scifi">🌌</div>
        <div class="pg-cell pg-adventure">🗡️</div>
        <div class="pg-cell pg-robot">🤖</div>
        <div class="pg-cell pg-nature">🌿</div>
      </div>

      <p class="brand-tagline">Join thousands tracking their watchlist</p>

      <!--
        3 simple benefit pills — why they should register
        Short, no essay
      -->
      <div class="genre-pills">
        <span class="pill pill-teal">Free forever</span>
        <span class="pill pill-blue">No ads</span>
        <span class="pill pill-purple">Private</span>
      </div>

      <!--
        STEPS — 3 short steps showing how easy it is
        Visual guide — builds trust and confidence
      -->
      <div class="reg-steps">
        <div class="reg-step">
          <div class="step-num">1</div>
          <div class="step-txt">
            <strong>Create account</strong>
            Sign up with email or social
          </div>
        </div>
        <div class="reg-step">
          <div class="step-num">2</div>
          <div class="step-txt">
            <strong>Add your titles</strong>
            Log movies, series and anime
          </div>
        </div>
        <div class="reg-step">
          <div class="step-num">3</div>
          <div class="step-txt">
            <strong>Track and rate</strong>
            Update status, rate, add notes
          </div>
        </div>
      </div>

    </div>
    <!-- end auth-left -->


    <!-- ── RIGHT PANEL ── -->
    <div class="auth-right">
      <div class="form-box">

        <h1 class="form-title">Create account</h1>
        <p class="form-sub">Get started in seconds</p>

        <!-- SOCIAL BUTTONS -->
        <div class="social-buttons">

          <a href="oauth/google.php" class="social-btn social-btn--google">
            <svg viewBox="0 0 24 24">
              <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
              <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
              <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
              <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
            </svg>
            Sign up with Google
          </a>

          <div class="social-row">
            <a href="oauth/facebook.php" class="social-btn social-btn--facebook">
              <svg viewBox="0 0 24 24" fill="#1877F2">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
              Facebook
            </a>
            <a href="oauth/github.php" class="social-btn social-btn--github">
              <svg viewBox="0 0 24 24" fill="rgba(255,255,255,0.8)">
                <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
              </svg>
              GitHub
            </a>
          </div>

        </div>

        <!-- DIVIDER -->
        <div class="form-divider">
          <span class="divider-line"></span>
          <span class="divider-text">or with email</span>
          <span class="divider-line"></span>
        </div>

        <!--
          REGISTER FORM
          action="register.php" → submits back to this same file
          method="POST"         → hides data from URL
          PHP will read:
            $_POST['username']
            $_POST['email']
            $_POST['password']
            $_POST['confirm_password']
        -->
        <form action="register.php" method="POST" class="login-form" id="registerForm">

          <!-- USERNAME -->
          <div class="input-group">
            <label for="username">Username</label>
            <div class="input-wrap">
              <span class="input-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                  <circle cx="12" cy="7" r="4"/>
                </svg>
              </span>
              <input
                type="text"
                name="username"
                id="username"
                placeholder="e.g. juan_watches"
                required
                minlength="3"
                maxlength="30"
                autocomplete="username"
              />
            </div>
          </div>

          <!-- EMAIL -->
          <div class="input-group">
            <label for="email">Email</label>
            <div class="input-wrap">
              <span class="input-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                  <polyline points="22,6 12,13 2,6"/>
                </svg>
              </span>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="you@email.com"
                required
                autocomplete="email"
              />
            </div>
          </div>

          <!-- PASSWORD -->
          <div class="input-group">
            <label for="password">Password</label>
            <div class="input-wrap">
              <span class="input-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                </svg>
              </span>
              <input
                type="password"
                name="password"
                id="password"
                placeholder="••••••••"
                required
                minlength="8"
                autocomplete="new-password"
                oninput="checkStrength(this.value)"
              />
              <button
                type="button"
                class="toggle-pw"
                onclick="togglePassword('password', this)"
              >Show</button>
            </div>

            <!--
              PASSWORD STRENGTH BAR
              4 bars that fill up based on password strength
              JS function checkStrength() controls this
            -->
            <div class="pw-strength">
              <div class="pw-bars">
                <div class="pw-bar" id="bar1"></div>
                <div class="pw-bar" id="bar2"></div>
                <div class="pw-bar" id="bar3"></div>
                <div class="pw-bar" id="bar4"></div>
              </div>
              <span class="pw-label" id="pwLabel">Enter a password</span>
            </div>

          </div>

          <!-- CONFIRM PASSWORD -->
          <div class="input-group">
            <label for="confirm_password">Confirm Password</label>
            <div class="input-wrap">
              <span class="input-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M9 12l2 2 4-4"/>
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                </svg>
              </span>
              <input
                type="password"
                name="confirm_password"
                id="confirm_password"
                placeholder="••••••••"
                required
                autocomplete="new-password"
                oninput="checkMatch()"
              />
              <button
                type="button"
                class="toggle-pw"
                onclick="togglePassword('confirm_password', this)"
              >Show</button>
            </div>
            <!--
              Match message — shows if passwords match or not
              JS function checkMatch() controls this
            -->
            <span class="match-msg" id="matchMsg"></span>
          </div>

          <button type="submit" class="btn-main">Create account</button>

        </form>

        <p class="form-footer">
          Already have an account? <a href="login.php">Sign in</a>
        </p>

        <p class="form-terms">
          By creating an account you agree to our
          <a href="#">Terms</a> &amp; <a href="#">Privacy Policy</a>
        </p>

      </div>
    </div>

  </div>

  <script>
    // ── SHOW / HIDE PASSWORD ──
    function togglePassword(inputId, btn) {
      const input = document.getElementById(inputId);
      if (input.type === 'password') {
        input.type = 'text';
        btn.textContent = 'Hide';
      } else {
        input.type = 'password';
        btn.textContent = 'Show';
      }
    }

    // ── PASSWORD STRENGTH CHECKER ──
    function checkStrength(value) {
      const bars  = [
        document.getElementById('bar1'),
        document.getElementById('bar2'),
        document.getElementById('bar3'),
        document.getElementById('bar4')
      ];
      const label = document.getElementById('pwLabel');

      // Reset all bars first
      bars.forEach(b => {
        b.className = 'pw-bar';
      });

      if (value.length === 0) {
        label.textContent = 'Enter a password';
        label.style.color = '';
        return;
      }

      // Score — add points for each rule passed
      let score = 0;
      if (value.length >= 8)               score++; // at least 8 chars
      if (/[A-Z]/.test(value))             score++; // has uppercase
      if (/[0-9]/.test(value))             score++; // has number
      if (/[^A-Za-z0-9]/.test(value))      score++; // has symbol

      // Apply color based on score
      if (score === 1) {
        bars[0].classList.add('bar-weak');
        label.textContent = 'Weak';
        label.style.color = '#F0997B';
      } else if (score === 2) {
        bars[0].classList.add('bar-fair');
        bars[1].classList.add('bar-fair');
        label.textContent = 'Fair';
        label.style.color = '#FAC775';
      } else if (score === 3) {
        bars[0].classList.add('bar-good');
        bars[1].classList.add('bar-good');
        bars[2].classList.add('bar-good');
        label.textContent = 'Good';
        label.style.color = '#85B7EB';
      } else if (score === 4) {
        bars.forEach(b => b.classList.add('bar-strong'));
        label.textContent = 'Strong';
        label.style.color = '#5DCAA5';
      }
    }

    // ── PASSWORD MATCH CHECKER ──
    function checkMatch() {
      const pw      = document.getElementById('password').value;
      const confirm = document.getElementById('confirm_password').value;
      const msg     = document.getElementById('matchMsg');

      if (confirm.length === 0) {
        msg.textContent = '';
        return;
      }

      if (pw === confirm) {
        msg.textContent = '✓ Passwords match';
        msg.style.color = '#5DCAA5';
      } else {
        msg.textContent = '✕ Passwords do not match';
        msg.style.color = '#F0997B';
      }
    }
  </script>

</body>
</html>