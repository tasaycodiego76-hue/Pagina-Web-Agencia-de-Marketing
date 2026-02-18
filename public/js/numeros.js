document.addEventListener("DOMContentLoaded", function () {

    function animateStats() {
        const yearsExperience = document.getElementById('years-experience');
        const studentsBenefited = document.getElementById('students-benefited');
        const teachersTrained = document.getElementById('teachers-trained');

        if (!yearsExperience || !studentsBenefited || !teachersTrained) return;

        const targetYears = 8;
        const targetStudents = 80400;
        const targetTeachers = 300;

        let currentYears = 0;
        let currentStudents = 0;
        let currentTeachers = 0;

        const interval = setInterval(() => {

            if (currentYears < targetYears) {
                yearsExperience.textContent = ++currentYears;
            }

            if (currentStudents < targetStudents) {
                currentStudents += 100;
                studentsBenefited.textContent = currentStudents.toLocaleString();
            }

            if (currentTeachers < targetTeachers) {
                currentTeachers += 10;
                teachersTrained.textContent = currentTeachers.toLocaleString();
            }

            if (
                currentYears >= targetYears &&
                currentStudents >= targetStudents &&
                currentTeachers >= targetTeachers
            ) {
                clearInterval(interval);
            }

        }, 50);
    }

    animateStats();
});
