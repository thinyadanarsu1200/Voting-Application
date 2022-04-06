<x-modal-confirm 
    eventToOpenModal="custom-show-delete-modal"
    eventToCloseModal="ideaWasDeleted"
    modalTitle="Delete Idea"
    modalDescription="Are you sure you want to delete this idea? This action cannot be undone.
    "
    modalConfirmButtonText="Delete"
    modalConfirmButtonColor="bg-v-red hover:bg-v-red-600 focus:ring-v-red"
    wireClick="deleteIdea"
/>