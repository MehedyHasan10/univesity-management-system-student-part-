var counter = 1;

var est_gpa;
var est_cgpa;

$(document).ready(function () {
    $("#current_semester").hide();
    $("#course_selector").hide();
    $("#course_1").hide();
    $("#course_2").hide();
    $("#course_3").hide();
    $("#course_4").hide();
    $("#course_5").hide();
    $("#course_6").hide();
    $("#calculate_btn").hide();
    $("#result").hide();
    $("#again_btn").hide();
});

$("#next_btn").click(function () {
    if (counter == 1) {
        if (($("#credit_completed").val() != "") && ($("#current_cgpa").val() != "")) {
            $("#previous_semester").hide();
            $("#current_semester").show();
            $("#course_selector").show();
            counter++;
        } else {
            alert("Please fill up all the fields.");
        }
    } else if (counter == 2) {
        $("#course_selector").hide();
        $("#calculate_btn").show();
        $("#next_btn").hide();
        if ($("#current_sem_course").val() == 2) {
            $("#course_1").show();
            $("#course_2").show();
            $("#course_3").hide();
            $("#course_4").hide();
            $("#course_5").hide();
            $("#course_6").hide();
        } else if ($("#current_sem_course").val() == 3) {
            $("#course_1").show();
            $("#course_2").show();
            $("#course_3").show();
            $("#course_4").hide();
            $("#course_5").hide();
            $("#course_6").hide();
        } else if ($("#current_sem_course").val() == 4) {
            $("#course_1").show();
            $("#course_2").show();
            $("#course_3").show();
            $("#course_4").show();
            $("#course_5").hide();
            $("#course_6").hide();
        } else if ($("#current_sem_course").val() == 5) {
            $("#course_1").show();
            $("#course_2").show();
            $("#course_3").show();
            $("#course_4").show();
            $("#course_5").show();
            $("#course_6").hide();
        } else if ($("#current_sem_course").val() == 6) {
            $("#course_1").show();
            $("#course_2").show();
            $("#course_3").show();
            $("#course_4").show();
            $("#course_5").show();
            $("#course_6").show();
        }
    }
});

$("#calculate_btn").click(function () {
    var credit_completed = $("#credit_completed").val();
    var current_cgpa = $("#current_cgpa").val();

    credit_completed = parseFloat(credit_completed);
    current_cgpa = parseFloat(current_cgpa);

    if ($("#current_sem_course").val() == 2) {
        if (($("#credit_completed_1").val() != "") &&
            ($("#current_cgpa_1").val() != "") &&
            ($("#credit_completed_2").val() != "") &&
            ($("#current_cgpa_2").val() != "")) {
            var c1_credit = $("#credit_completed_1").val();
            var c1_gpa = $("#current_cgpa_1").val();

            var c2_credit = $("#credit_completed_2").val();
            var c2_gpa = $("#current_cgpa_2").val();

            c1_credit = parseFloat(c1_credit);
            c1_gpa = parseFloat(c1_gpa);

            c2_credit = parseFloat(c2_credit);
            c2_gpa = parseFloat(c2_gpa);

            var current_sum = (c1_credit * c1_gpa) + (c2_credit * c2_gpa);

            var current_credit = c1_credit + c2_credit;

            var total_sum = current_sum + (current_cgpa * credit_completed);

            var total_credit = credit_completed + c1_credit + c2_credit;

            est_gpa = current_sum / current_credit;
            est_cgpa = total_sum / total_credit;

            $("#est_gpa").val(Math.round(est_gpa * 100) / 100);
            $("#est_cgpa").val(Math.round(est_cgpa * 100) / 100);
            $("#result").show();
            $("#current_semester").hide();
            $("#course_selector").hide();
            $("#course_1").hide();
            $("#course_2").hide();
            $("#course_3").hide();
            $("#course_4").hide();
            $("#course_5").hide();
            $("#course_6").hide();
            $("#calculate_btn").hide();
            $("#again_btn").show();
        } else {
            alert("Please fill up all the fields.");
        }
    } else if ($("#current_sem_course").val() == 3) {

        if (($("#credit_completed_1").val() != "") &&
            ($("#current_cgpa_1").val() != "") &&
            ($("#credit_completed_2").val() != "") &&
            ($("#current_cgpa_2").val() != "") &&
            ($("#credit_completed_3").val() != "") &&
            ($("#current_cgpa_3").val() != "")) {
            var c1_credit = $("#credit_completed_1").val();
            var c1_gpa = $("#current_cgpa_1").val();

            var c2_credit = $("#credit_completed_2").val();
            var c2_gpa = $("#current_cgpa_2").val();

            var c3_credit = $("#credit_completed_3").val();
            var c3_gpa = $("#current_cgpa_3").val();

            c1_credit = parseFloat(c1_credit);
            c1_gpa = parseFloat(c1_gpa);

            c2_credit = parseFloat(c2_credit);
            c2_gpa = parseFloat(c2_gpa);

            c3_credit = parseFloat(c3_credit);
            c3_gpa = parseFloat(c3_gpa);

            var current_sum = (c1_credit * c1_gpa) + (c2_credit * c2_gpa) + (c3_credit * c3_gpa);

            var current_credit = c1_credit + c2_credit + c3_credit;

            var total_sum = current_sum + (current_cgpa * credit_completed);

            var total_credit = credit_completed + c1_credit + c2_credit + c3_credit;

            est_gpa = current_sum / current_credit;
            est_cgpa = total_sum / total_credit;

            $("#est_gpa").val(Math.round(est_gpa * 100) / 100);
            $("#est_cgpa").val(Math.round(est_cgpa * 100) / 100);
            $("#result").show();
            $("#current_semester").hide();
            $("#course_selector").hide();
            $("#course_1").hide();
            $("#course_2").hide();
            $("#course_3").hide();
            $("#course_4").hide();
            $("#course_5").hide();
            $("#course_6").hide();
            $("#calculate_btn").hide();
            $("#again_btn").show();
        } else {
            alert("Please fill up all the fields.");
        }

    } else if ($("#current_sem_course").val() == 4) {

        if (($("#credit_completed_1").val() != "") &&
            ($("#current_cgpa_1").val() != "") &&
            ($("#credit_completed_2").val() != "") &&
            ($("#current_cgpa_2").val() != "") &&
            ($("#credit_completed_3").val() != "") &&
            ($("#current_cgpa_3").val() != "") &&
            ($("#credit_completed_4").val() != "") &&
            ($("#current_cgpa_4").val() != "")) {
            var c1_credit = $("#credit_completed_1").val();
            var c1_gpa = $("#current_cgpa_1").val();

            var c2_credit = $("#credit_completed_2").val();
            var c2_gpa = $("#current_cgpa_2").val();

            var c3_credit = $("#credit_completed_3").val();
            var c3_gpa = $("#current_cgpa_3").val();

            var c4_credit = $("#credit_completed_4").val();
            var c4_gpa = $("#current_cgpa_4").val();

            c1_credit = parseFloat(c1_credit);
            c1_gpa = parseFloat(c1_gpa);

            c2_credit = parseFloat(c2_credit);
            c2_gpa = parseFloat(c2_gpa);

            c3_credit = parseFloat(c3_credit);
            c3_gpa = parseFloat(c3_gpa);

            c4_credit = parseFloat(c4_credit);
            c4_gpa = parseFloat(c4_gpa);

            var current_sum = (c1_credit * c1_gpa) + (c2_credit * c2_gpa) + (c3_credit * c3_gpa) + (
                c4_credit * c4_gpa);

            var current_credit = c1_credit + c2_credit + c3_credit + c4_credit;

            var total_sum = current_sum + (current_cgpa * credit_completed);

            var total_credit = credit_completed + c1_credit + c2_credit + c3_credit + c4_credit;

            est_gpa = current_sum / current_credit;
            est_cgpa = total_sum / total_credit;

            $("#est_gpa").val(Math.round(est_gpa * 100) / 100);
            $("#est_cgpa").val(Math.round(est_cgpa * 100) / 100);
            $("#result").show();
            $("#current_semester").hide();
            $("#course_selector").hide();
            $("#course_1").hide();
            $("#course_2").hide();
            $("#course_3").hide();
            $("#course_4").hide();
            $("#course_5").hide();
            $("#course_6").hide();
            $("#calculate_btn").hide();
            $("#again_btn").show();
        } else {
            alert("Please fill up all the fields.");
        }

    } else if ($("#current_sem_course").val() == 5) {

        if (($("#credit_completed_1").val() != "") &&
            ($("#current_cgpa_1").val() != "") &&
            ($("#credit_completed_2").val() != "") &&
            ($("#current_cgpa_2").val() != "") &&
            ($("#credit_completed_3").val() != "") &&
            ($("#current_cgpa_3").val() != "") &&
            ($("#credit_completed_4").val() != "") &&
            ($("#current_cgpa_4").val() != "") &&
            ($("#credit_completed_5").val() != "") &&
            ($("#current_cgpa_5").val() != "")) {
            var c1_credit = $("#credit_completed_1").val();
            var c1_gpa = $("#current_cgpa_1").val();

            var c2_credit = $("#credit_completed_2").val();
            var c2_gpa = $("#current_cgpa_2").val();

            var c3_credit = $("#credit_completed_3").val();
            var c3_gpa = $("#current_cgpa_3").val();

            var c4_credit = $("#credit_completed_4").val();
            var c4_gpa = $("#current_cgpa_4").val();

            var c5_credit = $("#credit_completed_5").val();
            var c5_gpa = $("#current_cgpa_5").val();

            c1_credit = parseFloat(c1_credit);
            c1_gpa = parseFloat(c1_gpa);

            c2_credit = parseFloat(c2_credit);
            c2_gpa = parseFloat(c2_gpa);

            c3_credit = parseFloat(c3_credit);
            c3_gpa = parseFloat(c3_gpa);

            c4_credit = parseFloat(c4_credit);
            c4_gpa = parseFloat(c4_gpa);

            c5_credit = parseFloat(c5_credit);
            c5_gpa = parseFloat(c5_gpa);

            var current_sum = (c1_credit * c1_gpa) + (c2_credit * c2_gpa) + (c3_credit * c3_gpa) + (
                c4_credit * c4_gpa) + (c5_credit * c5_gpa);

            var current_credit = c1_credit + c2_credit + c3_credit + c4_credit + c5_credit;

            var total_sum = current_sum + (current_cgpa * credit_completed);

            var total_credit = credit_completed + c1_credit + c2_credit + c3_credit + c4_credit + c5_credit;

            est_gpa = current_sum / current_credit;
            est_cgpa = total_sum / total_credit;

            $("#est_gpa").val(Math.round(est_gpa * 100) / 100);
            $("#est_cgpa").val(Math.round(est_cgpa * 100) / 100);
            $("#result").show();
            $("#current_semester").hide();
            $("#course_selector").hide();
            $("#course_1").hide();
            $("#course_2").hide();
            $("#course_3").hide();
            $("#course_4").hide();
            $("#course_5").hide();
            $("#course_6").hide();
            $("#calculate_btn").hide();
            $("#again_btn").show();
        } else {
            alert("Please fill up all the fields.");
        }


    } else if ($("#current_sem_course").val() == 6) {

        if (($("#credit_completed_1").val() != "") &&
            ($("#current_cgpa_1").val() != "") &&
            ($("#credit_completed_2").val() != "") &&
            ($("#current_cgpa_2").val() != "") &&
            ($("#credit_completed_3").val() != "") &&
            ($("#current_cgpa_3").val() != "") &&
            ($("#credit_completed_4").val() != "") &&
            ($("#current_cgpa_4").val() != "") &&
            ($("#credit_completed_5").val() != "") &&
            ($("#current_cgpa_5").val() != "") &&
            ($("#credit_completed_6").val() != "") &&
            ($("#current_cgpa_6").val() != "")) {
            var c1_credit = $("#credit_completed_1").val();
            var c1_gpa = $("#current_cgpa_1").val();

            var c2_credit = $("#credit_completed_2").val();
            var c2_gpa = $("#current_cgpa_2").val();

            var c3_credit = $("#credit_completed_3").val();
            var c3_gpa = $("#current_cgpa_3").val();

            var c4_credit = $("#credit_completed_4").val();
            var c4_gpa = $("#current_cgpa_4").val();

            var c5_credit = $("#credit_completed_5").val();
            var c5_gpa = $("#current_cgpa_5").val();

            var c6_credit = $("#credit_completed_6").val();
            var c6_gpa = $("#current_cgpa_6").val();

            c1_credit = parseFloat(c1_credit);
            c1_gpa = parseFloat(c1_gpa);

            c2_credit = parseFloat(c2_credit);
            c2_gpa = parseFloat(c2_gpa);

            c3_credit = parseFloat(c3_credit);
            c3_gpa = parseFloat(c3_gpa);

            c4_credit = parseFloat(c4_credit);
            c4_gpa = parseFloat(c4_gpa);

            c5_credit = parseFloat(c5_credit);
            c5_gpa = parseFloat(c5_gpa);

            c6_credit = parseFloat(c6_credit);
            c6_gpa = parseFloat(c6_gpa);

            var current_sum = (c1_credit * c1_gpa) + (c2_credit * c2_gpa) + (c3_credit * c3_gpa) + (
                c4_credit * c4_gpa) + (c5_credit * c5_gpa) + (c6_credit * c6_gpa);

            var current_credit = c1_credit + c2_credit + c3_credit + c4_credit + c5_credit + c6_credit;

            var total_sum = current_sum + (current_cgpa * credit_completed);

            var total_credit = credit_completed + c1_credit + c2_credit + c3_credit + c4_credit +
                c5_credit + c6_credit;

            est_gpa = current_sum / current_credit;
            est_cgpa = total_sum / total_credit;

            $("#est_gpa").val(Math.round(est_gpa * 100) / 100);
            $("#est_cgpa").val(Math.round(est_cgpa * 100) / 100);
            $("#result").show();
            $("#current_semester").hide();
            $("#course_selector").hide();
            $("#course_1").hide();
            $("#course_2").hide();
            $("#course_3").hide();
            $("#course_4").hide();
            $("#course_5").hide();
            $("#course_6").hide();
            $("#calculate_btn").hide();
            $("#again_btn").show();
        } else {
            alert("Please fill up all the fields.");
        }
    }

    $("#again_btn").click(function () {
        location.reload();
    });
});