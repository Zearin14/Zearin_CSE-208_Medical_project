// Simple DOM helper to log actions
document.addEventListener("DOMContentLoaded", () => {
    console.log("Medical Records System loaded.");

    // Populate dummy doctors list (for doctors.html)
    if (document.getElementById("doctors-list")) {
        const doctors = [
            { name: "Dr. Sarah Johnson", specialty: "Cardiologist" },
            { name: "Dr. Ahmed Khan", specialty: "Pediatrician" },
            { name: "Dr. Maria Lopez", specialty: "Dermatologist" }
        ];

        const list = document.getElementById("doctors-list");
        doctors.forEach(doc => {
            const div = document.createElement("div");
            div.classList.add("doctor-card");
            div.innerHTML = `<h3>${doc.name}</h3><p>Specialty: ${doc.specialty}</p>`;
            list.appendChild(div);
        });
    }

    // Basic form validation for appointments (appointments.html)
    const appointmentForm = document.getElementById("appointment-form");
    if (appointmentForm) {
        appointmentForm.addEventListener("submit", function (e) {
            const name = this.patient_name.value.trim();
            const doctor = this.doctor.value.trim();
            const date = this.date.value;
            const time = this.time.value;

            if (!name || !doctor || !date || !time) {
                alert("Please fill out all fields.");
                e.preventDefault();
            }
        });
    }
});
