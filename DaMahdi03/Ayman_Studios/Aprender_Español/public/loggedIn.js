if (sessionStorage.getItem("loggedIn") === true) {
    if (lessonNumber - 1 === sessionStorage.getItem("lessonsCompleted")) {

    } else {
        var redirectToLessonNumber = Number(sessionStorage.getItem("lessonsCompleted")) + 1;
        $("body").append("<meta http-equiv='refresh' content='5;url=../Lesson_" + redirectToLessonNumber + "/' />");
        window.location.assign('../Lesson_' + String(redirectToLessonNumber));
    }
} else {
    alert("Please Sign Up or Sign In Before Accessing This Content!");
    window.location.assign('../registration/register.html');
}