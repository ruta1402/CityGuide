function drpdwn() {
    var id = document.getElementById("place").value;

    if (id == 1) {
        document.getElementById("map").src = "https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15087.821988518395!2d72.84272349973537!3d19.021682587810712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbus%20stops%20dadar!5e0!3m2!1sen!2sin!4v1647308342337!5m2!1sen!2sin";
    } else if (id == 2) {
        document.getElementById("map").src = "https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d60338.96299884175!2d72.80193180498743!3d19.055593801679585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbus%20stops%20bandra!5e0!3m2!1sen!2sin!4v1647308413184!5m2!1sen!2sin";
    } else if (id == 3) {
        document.getElementById("map").src = "https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7542.523416280683!2d72.89673335155442!3d19.052227743293326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbus%20stop%20Chembur!5e0!3m2!1sen!2sin!4v1647308470228!5m2!1sen!2sin";
    } else if (id == 4) {
        document.getElementById("map").src = "https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30164.51330542606!2d72.89376129923315!3d19.082890798827123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbus%20stop%20ghatkopar!5e0!3m2!1sen!2sin!4v1647308524858!5m2!1sen!2sin";
    }


}