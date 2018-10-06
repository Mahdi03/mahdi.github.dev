if (sessionStorage.getItem("loggedIn") === true) {
    if (lessonNumber - 1 === sessionStorage.getItem("lessonsCompleted")) {
        alert("Welcome to Lesson" + String(lessonNumber));
    } else {
        var redirectToLessonNumber = Number(sessionStorage.getItem("lessonsCompleted")) + 1;
        window.location.assign('../Lesson_' + String(redirectToLessonNumber));
    }
} else {
    alert("Please Sign Up or Sign In Before Accessing This Content!");
    window.location.assign('../registration/register.html');
}