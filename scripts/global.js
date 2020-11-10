function showProfileContainer() {
    var profile = document.getElementById('profile');
    var profile_container = document.getElementById('profile_container');
    profile_container.hidden = !profile_container.hidden;
    profile_container.style.right = innerWidth - profile.offsetLeft - profile.clientWidth + 'px';
    profile_container.style.top = profile.offsetTop + profile.clientHeight + 'px';
}