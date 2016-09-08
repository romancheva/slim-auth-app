    {% if auth %}
    Hello, {{ auth.getFullNameOrUsername() }}!
    <img src="{{ auth.getAvatarUrl({size: 100}) }}" alt="Your avatar">
    {% endif %}
<ul>
    <li><a href="{{ urlFor('home') }}">Home</a> </li>
    {% if auth %}
        <li><a href="{{ urlFor('logout') }}">Log out</a></li>
        <li><a href="{{ urlFor('user.profile', {username: auth.username}) }}">Your profile</a> </li>
        <li><a href="{{ urlFor('password.change') }}">Change password</a> </li>
        <li><a href="{{ urlFor('account.profile') }}">Update profile</a> </li>

        {% if auth.isAdmin() %}
            <li><a href="{{ urlFor('admin.example') }}">Admin area</a> </li>
        {% endif %}
    {% else %}
         <li><a href="{{ urlFor('register') }}">Register</a> </li>
         <li><a href="{{ urlFor('login') }}">Login</a> </li>
    {% endif %}
    <li><a href="{{ urlFor('user.all') }}">All users</a> </li>
</ul>

    {% if auth.hasPermission('can_post_topic') %}
        User can post topic
    {% endif %}