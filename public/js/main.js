document.addEventListener("DOMContentLoaded", function () {
    const avatarToggle = document.getElementById("avatarToggle");
    const avatar = document.getElementById("avatar");

    avatarToggle.addEventListener("click", () => {
        avatar.classList.toggle("hidden");
        avatar.classList.toggle("flex");
    });
});
