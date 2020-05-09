function setOptions(chosen) {
var selbox = document.myform.Lecturer_dep;
selbox.options.length = 0;
if (chosen == " ") {
  selbox.options[selbox.options.length] = new Option('Select Above First',' ');
}
if (chosen == "Ahmad Ibrahim Kulliyah of Laws") {
  selbox.options[selbox.options.length] = new Option('Department of Private Law','Department of Private Law');
  selbox.options[selbox.options.length] = new Option('Department of Public Law','Department of Public Law');
  selbox.options[selbox.options.length] = new Option('Department of Islamic Law','Department of Islamic Law');
}
if (chosen == "Centre for Languages and Preuniversity Academic Development") {
  selbox.options[selbox.options.length] = new Option('English Language Division','English Language Division');
  selbox.options[selbox.options.length] = new Option('Malay Language Division','Malay Language Division');
  selbox.options[selbox.options.length] = new Option('Quranic Language Division','Quranic Language Division');
  selbox.options[selbox.options.length] = new Option('Tilawah Division','Tilawah Division');
}
if (chosen == "Institute of Education") {
  selbox.options[selbox.options.length] = new Option('Department of Counseling','Department of Counseling');
  selbox.options[selbox.options.length] = new Option('Department of Educational Management','Department of Educational Management');
  selbox.options[selbox.options.length] = new Option('Department of Moral','Department of Moral');
  selbox.options[selbox.options.length] = new Option('Department of TASL','Department of TASL');
  selbox.options[selbox.options.length] = new Option('Department of TESL','Department of TESL');
}
if (chosen == "Kulliyyah of Economics & Management Sciences") {
  selbox.options[selbox.options.length] = new Option('Department of Accounting','Department of Accounting');
  selbox.options[selbox.options.length] = new Option('Department of Business Administration','Department of Business Administration');
  selbox.options[selbox.options.length] = new Option('Department of Economics','Department of Economics');
  selbox.options[selbox.options.length] = new Option('Department of Management Center','Department of Management Center');
}
if (chosen == "Kulliyyah of Architecture and Enviromental Design") {
  selbox.options[selbox.options.length] = new Option('Department of Applied Arts and Design','Department of Applied Arts and Design');
  selbox.options[selbox.options.length] = new Option('Department of Architecture','Department of Architecture');
  selbox.options[selbox.options.length] = new Option('Department of Quantity Surveying','Department of Quantity Surveying');
  selbox.options[selbox.options.length] = new Option('Department of Urban and Regional Planning','Department of Urban and Regional Planning');
}
if (chosen == "Kulliyyah of Information and Communcation Technology") {
  selbox.options[selbox.options.length] = new Option('Department of Computer Science','Department of Computer Science');
  selbox.options[selbox.options.length] = new Option('Department of Information System','Department of Information System');
  selbox.options[selbox.options.length] = new Option('Department of Library and Information Science','Department of Library and Information Science');
}
if (chosen == "Kulliyyah of Engineering") {
  selbox.options[selbox.options.length] = new Option('Department of Biotechnology','Department of Biotechnology');
  selbox.options[selbox.options.length] = new Option('Department of Mechanical','Department of Mechanical');
  selbox.options[selbox.options.length] = new Option('Department of Electrical and Computer Engineering','Department of Electrical and Computer Engineering');
  selbox.options[selbox.options.length] = new Option('Department of Manufacturing and Material','Department of Manufacturing and Material');
  selbox.options[selbox.options.length] = new Option('Department of Mechatronics','Department of Mechatronics');
  selbox.options[selbox.options.length] = new Option('Department of Science in Engineering','Department of Science in Engineering');
}
if (chosen == "Kulliyyah of Islamic Revealed Knowledge and Human Sciences") {
  selbox.options[selbox.options.length] = new Option('Department of Applied Phsycology Center','Department of Applied Phsycology Center');
  selbox.options[selbox.options.length] = new Option('Department of Arabic Language and Literature','Department of Arabic Language and Literature');
  selbox.options[selbox.options.length] = new Option('Department of Communication','Department of Communication');
  selbox.options[selbox.options.length] = new Option('Department of English Language and Literature','Department of English Language and Literature');
  selbox.options[selbox.options.length] = new Option('Department of Fiqih and Ushul Fiqih','Department of Fiqih and Ushul Fiqih');
  selbox.options[selbox.options.length] = new Option('Department of General Studies','Department of General Studies');
  selbox.options[selbox.options.length] = new Option('Department of History and Civilization','Department of History and Civilization');
  selbox.options[selbox.options.length] = new Option('Department of Islamic Revealed Knowladge and Heritage','Department of Islamic Revealed Knowladge and Heritage');
  selbox.options[selbox.options.length] = new Option('Department of Philosophy','Department of Philosophy');
  selbox.options[selbox.options.length] = new Option('Department of Political Science','Department of Political Science');
  selbox.options[selbox.options.length] = new Option('Department of Psycology','Department of Psycology');
  selbox.options[selbox.options.length] = new Option('Department of Quran and Sunnah Studies','Department of Quran and Sunnah Studies');
  selbox.options[selbox.options.length] = new Option('Department of Sociology and Antropology','Department of Sociology and Antropology');
  selbox.options[selbox.options.length] = new Option('Department of Usuluddin and Comparative Religion','Department of Usuluddin and Comparative Religion');
}
if (chosen == "Kulliyyah of Allied Health Sciences") {
  selbox.options[selbox.options.length] = new Option('Department of Audiology and Speech Language Pathology','Department of Audiology and Speech Language Pathology');
  selbox.options[selbox.options.length] = new Option('Department of Basic Health Science','Department of Basic Health Science');
  selbox.options[selbox.options.length] = new Option('Department of Diagnostic Imaging and Radioteraphy','Department of Diagnostic Imaging and Radioteraphy');
  selbox.options[selbox.options.length] = new Option('Department of Nutrition Science','Department of Nutrition Science');
  selbox.options[selbox.options.length] = new Option('Department of Optometry and Visual Science','Department of Optometry and Visual Science');
}
if (chosen == "Kulliyyah of Medicine") {
  selbox.options[selbox.options.length] = new Option('Department of Aneasthesiology','Department of Aneasthesiology');
  selbox.options[selbox.options.length] = new Option('Department of Basic Medical Sciences','Department of Basic Medical Sciences');
  selbox.options[selbox.options.length] = new Option('Department of CH & FM','Department of CH & FM');
  selbox.options[selbox.options.length] = new Option('Department of Internal Medicine','Department of Internal Medicine');
  selbox.options[selbox.options.length] = new Option('Department of Opthamology','Department of Opthamology');
  selbox.options[selbox.options.length] = new Option('Department of Orthopaedics','Department of Orthopaedics');
  selbox.options[selbox.options.length] = new Option('Department of Paediatrics','Department of Paediatrics');
  selbox.options[selbox.options.length] = new Option('Department of Psychiatry','Department of Psychiatry');
  selbox.options[selbox.options.length] = new Option('Department of Psychiatry','Department of Psychiatry');  
  selbox.options[selbox.options.length] = new Option('Department of Surgery','Department of Surgery');
}
if (chosen == "Kulliyyah of Nursing") {
  selbox.options[selbox.options.length] = new Option('Department of Nursing','Department of Nursing');
}
if (chosen == "Kulliyyah of Science") {
  selbox.options[selbox.options.length] = new Option('Department of Biomedical Science','Department of Biomedical Science');
  selbox.options[selbox.options.length] = new Option('Department of Biotechnology','Department of Biotechnology');
  selbox.options[selbox.options.length] = new Option('Department of Computational and Teorytical Science','Department of Computational and Teorytical Science');
}
if (chosen == "Kulliyyah of Pharmacy") {
  selbox.options[selbox.options.length] = new Option('Department of Basic Medical Science','Department of Basic Medical Science');
  selbox.options[selbox.options.length] = new Option('Department of Pharmaceutical Chemistry','Department of Pharmaceutical Chemistry');
  selbox.options[selbox.options.length] = new Option('Department of Pharmaceutical Technology','Department of Pharmaceutical Technology');
  selbox.options[selbox.options.length] = new Option('Department of Pharmacy Practice','Department of Pharmacy Practice');
}
if (chosen == "Kulliyyah of Dentistry") {
  selbox.options[selbox.options.length] = new Option('Department of Dentistry','Department of Dentistry');
}
if (chosen == "Kulliyyah of Languages and Management") {
  selbox.options[selbox.options.length] = new Option('Department of Language and Management','Department of Language and Management');
}
}