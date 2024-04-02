document.addEventListener('DOMContentLoaded', function () {
    const addEmailButton = document.getElementById('addEmailButton');
    const removeEmailButton = document.getElementById('removeEmailButton');
    const emailList = document.getElementById('emailList');
    const emailInput = document.getElementById('emailInput');

    addEmailButton.addEventListener('click', function () {
      const email = emailInput.value.trim();
      if (email !== '') {
        const listItem = document.createElement('li');
        listItem.textContent = email;
        listItem.className = 'text-sm text-gray-900 dark:text-white';
        emailList.appendChild(listItem);
        emailInput.value = ''; // Clear input field after adding email
      }
    });

    removeEmailButton.addEventListener('click', function () {
      const lastEmail = emailList.lastElementChild;
      if (lastEmail) {
        emailList.removeChild(lastEmail);
      }
    });
  });