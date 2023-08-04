<script>
  import { onMount } from 'svelte';
  import { user } from '$lib/stores';
  import { get } from '$lib/api';

  let profileData = null;

  onMount(async () => {
    try {
      const token = locals.user.token; // Assuming you have the user token in a store named `user`
      profileData = await get('profile', token);
    } catch (error) {
      console.error('Error fetching profile data:', error);
    }
  });
</script>

<main>
  {#if profileData}
    <h1>Welcome, {profileData.name}</h1>
    <p>Email: {profileData.email}</p>
  {:else}
    <p>Loading...</p>
  {/if}
</main>
