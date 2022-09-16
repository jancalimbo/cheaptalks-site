<h1>Welcome to Twikker, {{ $user->fname }}!</h1>
<h3>Feel free to share with us what's on your mind.</h3>

<br>

<p>Thank you for being a part of our growing community. Please click the link below to verify your account.</p>

<p>
  <a href="{{ url('/verification/' . $user->id . '/' . $user->remember_token)}}">Click here.</a>
</p>