<x-modal-confirm 
    liveWireEventToOpenModal="resetCommentReportsWasSet"
    eventToCloseModal="commentWasReseted"
    modalTitle="Reset Spam Reports"
    modalDescription="Are you sure you want to reset spam reports of this comment? This action cannot be undone.
    "
    modalConfirmButtonText="Reset span"
    modalConfirmButtonColor="bg-v-blue hover:bg-v-blue-hover text-white focus:ring-v-blue"
    wireClick="resetCommentReports"
/>

