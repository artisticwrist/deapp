// Toggles to home page

const showHome = () => {
  const explorePage = document.getElementById("explore");
  explorePage.style.display = "flex";
  const userPage = document.getElementById("user-page");
  userPage.style.display = "none";
  const usersList = document.getElementById("users-list");
  usersList.style.display = "none";
};

// Toggles to profile page
const showProfile = () => {
  const explorePage = document.getElementById("explore");
  explorePage.style.display = "none";
  const userPage = document.getElementById("user-page");
  userPage.style.display = "flex";
  const usersList = document.getElementById("users-list");
  usersList.style.display = "none";
};

//Toggles to users list page

const showUsers = () => {
  console.log("work");
  const explorePage = document.getElementById("explore");
  explorePage.style.display = "none";
  const userPage = document.getElementById("user-page");
  userPage.style.display = "none";
  const usersList = document.getElementById("users-list");
  usersList.style.display = "flex";
};

//OPen Modal
const modal = document.querySelector(".modal");
const body = document.querySelector("body");

function showModal(imageSrc, description) {
  var modalImg = document.getElementById("modalImage");
  var modalDescription = document.getElementById("modal-description");

  modalDescription.textContent = description;
  modalImg.src = imageSrc;
  modal.style.display = "flex";
  body.style.overflow = "hidden";
}

//Close modal
modal.addEventListener("click", () => {
  bodyHeight = "fit-content";
  modal.style.display = "none";
  body.style.overflow = "scroll";
});

function showUploadForm() {
  const userSection = document.getElementById("user-section");
  const uploadForm = document.getElementById("upload-form");

  uploadForm.classList.remove("display-none");
  userSection.classList.add("display-none");
}

function closeUploadForm() {
  const userSection = document.getElementById("user-section");
  const uploadForm = document.getElementById("upload-form");

  uploadForm.classList.add("display-none");
  userSection.classList.remove("display-none");
}

function showEditForm() {
  const userSection = document.getElementById("user-section");
  const profileForm = document.getElementById("profile-form");

  userSection.classList.add("display-none");
  profileForm.classList.remove("display-none");
  console.log(profileForm)
}

//Complete user profile form

function showPronounForm() {
  const inputGender = document.querySelector(".gender-input");
  const inputPronoun = document.querySelector(".pronoun-input");

  inputGender.style.display = "none";
  inputPronoun.classList.remove("display-none");
}

function showMobileForm() {
  const inputMobile = document.querySelector(".mobile-input");
  const inputPronoun = document.querySelector(".pronoun-input");

  inputMobile.classList.remove("display-none");
  inputPronoun.classList.add("display-none");
}



function showLinkForm() {
  const inputMobile = document.querySelector(".mobile-input");
  const inputLink = document.querySelector(".link-input");

  inputMobile.classList.add("display-none");
  inputLink.classList.remove("display-none");
}

function showDescriptionForm() {
  const inputDescription = document.querySelector(".description-input");
  const inputLink = document.querySelector(".link-input");

  inputDescription.classList.remove("display-none");
  inputLink.classList.add("display-none");
}

function showPfpForm() {
  const inputDescription = document.querySelector(".description-input");
  const inputpfp = document.querySelector(".pfp-input");
  const btnFinish = document.querySelector(".btn-finish");

  inputDescription.classList.add("display-none");
  inputpfp.classList.remove("display-none");

  btnFinish.classList.remove('display-none')
}






function closeForm() {
  const form = document.querySelector("#complete-form");
  const mainPage = document.querySelector(".main-page");

  form.classList.add("display-none");
  mainPage.classList.remove("display-none");
}
