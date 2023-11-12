function searchs() {

  let searchInput = document.querySelector(".search-input").value.toUpperCase();
  let allUsersBox = document.querySelector(".all-users-box");
  let usersBox = document.querySelectorAll(".all-users-box .users-box");
  let pname = allUsersBox.getElementsByTagName("p");
  let userNotFoundMessage = document.querySelector(".user-not-found-message");
  let box = document.querySelector(".box");
  box.classList.add("display-none");
  // Initialize a variable to keep track of whether any user was found
  let userFound = false;

  // SEARCH
  for (var i = 0; i < pname.length; i++) {
    let match = usersBox[i].getElementsByTagName("p")[0];

    if (match) {
      let textValue = match.textContent || match.innerHTML;

      if (textValue.toUpperCase().indexOf(searchInput) > -1) {
        usersBox[i].style.display = "";
        userFound = true; // User was found
        allUsersBox.classList.remove("display-none")
      } else {
        usersBox[i].style.display = "none";
      }
    }
  }

  if (searchInput === "") {
    allUsersBox.classList.add("display-none");
    box.classList.remove("display-none");
  }

  // Check if no user was found, and display the "user not found" message
  if (!userFound) {
    userNotFoundMessage.style.display = "block";
    userNotFoundMessage.classList.remove("display-none");
  } else {
    userNotFoundMessage.style.display = "none";
    userNotFoundMessage.classList.add("display-none");
  }
}
