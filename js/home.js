$(document).ready(function() {
    pre();
});

$("#pre").click(function() {
    pre();
});

function pre() {
    $("#pre_symp_content").html("To prevent infection and to slow trasmission of COVID-19, do the following: <br>" +
        "<ol>" +
        "<li>Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.</li>" +
        "<li>Maintain at least 1 metre distance between you and people coughing or sneezing.</li>" +
        "<li>Avoid touching your face.</li>" +
        "<li>Cover your mouth and nose when coughing or sneezing.</li>" +
        "<li>Stay home if you feel unwell.</li>" +
        "<li>Refrain from smoking and other activities that weaken the lungs.</li>" +
        "<li>Practice physical distancing by avoiding unnecessary travel and staying away from large groups of people.</li>" +
        "</ol>");
}

$("#symp").click(function() {
    $("#pre_symp_content").html("COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.<br>" +
        "Most Common Symptons : <br> " +
        "<ol>" +
        "<li>Fever</li>" +
        "<li>dry cough</li>" +
        "<li>tiredness</li>" +
        "</ol>" +
        "Less common Symptons : <br>" +
        "<ol>" +
        "<li>aches and pain</li>" +
        "<li>sore throat</li>" +
        "<li>diarrhoea</li>" +
        "<li>conjuctivitis</li>" +
        "<li>headache</li>" +
        "<li>loss of taste or smell</li>" +
        "<li>a rash on skin, or discolouration of finger or toes</li>" +
        "</ol>" +
        "Serious symptoms : " +
        "<ol>" +
        "<li>difficulty breathing or shortness of breath</li>" +
        "<li>chest pain and pressure</li>" +
        "<li>loss of speech or movement</li>" +
        "</ol>" +
        "Seek immediate medical attention if you have serious symptoms.  Always call before visiting your doctor or health facility.<br>" +
        "People with mild symptoms who are otherwise healthy should manage their symptoms at home.<br> " +
        "On average it takes 5–6 days from when someone is infected with the virus for symptoms to show, however it can take up to 14 days."

    );
});