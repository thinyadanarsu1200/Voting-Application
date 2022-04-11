<x-modal-confirm 
    deleteCommentWasSet="deleteCommentWasSet"
    eventToCloseModal="commentWasDeleted"
    modalTitle="Delete Comment"
    modalDescription="Are you sure you want to delete this comment? This action cannot be undone.
    "
    modalConfirmButtonText="Delete"
    modalConfirmButtonColor="bg-v-red hover:bg-v-red-600 focus:ring-v-red"
    wireClick="deleteComment"
/>