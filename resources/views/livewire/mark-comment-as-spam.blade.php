<x-modal-confirm 
    liveWireEventToOpenModal="markCommentAsSpamWasSet"
    eventToCloseModal="commentWasMarkAsSpam"
    modalTitle="Mark Comment As Spam"
    modalDescription="Are you sure you want to mark this comment as spam? This action cannot be undone."
    modalConfirmButtonText="Mark Comment As Spam"
    modalConfirmButtonColor="bg-v-blue hover:bg-v-blue-hover text-white focus:ring-v-blue"
    wireClick="markCommentAsSpam"
/>

