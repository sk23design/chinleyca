<template>
  <div class="flex justify-center items-center">
    <div class="w-full max-w-xl">
      <heading class="flex mb-3">Heres Your Custom Admin System!</heading>
      <p class="text-90 leading-tight mb-8">
     
      </p>
      <card>
        <table class="w-full" cellpadding="0" cellspacing="0">
          <tr>
            <td class="align-top w-1/2 border-r border-b border-50">
              <a :href="search" class="no-underline dim flex p-6">
                <div class="flex justify-center w-11 flex-no-shrink mr-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="var(--primary)" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
</svg>
                </div>

                <div>
                  <heading :level="3" class="mb-3">Search</heading>
                  <p class="text-90 leading-normal">
                   Use the search bar at the top of the screen to search for any resource shown on the left. There is a scoped search on each resource to search within that resource.
                  </p>
                </div>
              </a>
            </td>

            <td class="align-top w-1/2 border-b border-50">
              <a :href="whatson" class="no-underline dim flex p-6">
                <div class="flex justify-center w-11 flex-no-shrink mr-6">
           <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="var(--primary)" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
</svg>
                </div>

                <div>
                  <heading :level="3" class="mb-3">Whats On</heading>
                  <p class="text-90 leading-normal">
                    Add, edit and delete events, assign events to a venue for it to show under that venues page. Categories can be added to group the events together this forms the filtration element on the events pages.
                  </p>
                </div>
              </a>
            </td>
          </tr>

          <tr>
            <td class="align-top w-1/2 border-r border-b border-50">
              <a :href="venues" class="no-underline dim flex p-6">
                <div class="flex justify-center w-11 flex-no-shrink mr-6">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"  stroke="var(--primary)" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
</svg>
 
                  
                </div>

                <div>
                  <heading :level="3" class="mb-3">Venues</heading>
                  <p class="text-90 leading-normal">
                   Add, edit and delete venues,  events will show on the venue automatically. Venue details can be added and settings to use external websites for information and bookings.
                  </p>
                </div>
              </a>
            </td>

          <td class="align-top w-1/2 border-b border-50">
              <a :href="villages" class="no-underline dim flex p-6">
                <div class="flex justify-center w-11 flex-no-shrink mr-6">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="var(--primary)" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>
                </div>

                <div>
                  <heading :level="3" class="mb-3">Villages</heading>
                  <p class="text-90 leading-normal">
                   This draws the 3 villages on the home page. This is potentially for future development, the village intro and image can be edited here.
                  </p>
                </div>
              </a>
            </td>
          </tr>

          <tr>
            <td class="align-top w-1/2 border-r border-b border-50">
              <a :href="content" class="no-underline dim flex p-6">
                <div class="flex justify-center w-11 flex-no-shrink mr-6">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="var(--primary)" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
</svg>
                </div>

                <div>
                  <heading :level="3" class="mb-3">Content</heading>
                  <p class="text-90 leading-normal">
                   Pages hold the information for pages - certain pages use a template but this can be left blank. Page intros, cover images can be edited here. Documents can be addded and assigned to the page.
                  </p>
                </div>
              </a>
            </td>

            <td class="align-top w-1/2 border-b border-50">
              <a :href="users" class="no-underline dim flex p-6">
                <div class="flex justify-center w-11 flex-no-shrink mr-6">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="var(--primary)" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
</svg>
                </div>

                <div>
                  <heading :level="3" class="mb-3">Users</heading>
                  <p class="text-90 leading-normal">
                    Add edit new users here. For security - we need to implicitly allow new users for the admin section so please contact <strong>info@sk23.co.uk</strong> with the user email.
                  </p>
                </div>
              </a>
            </td>
          </tr>
        </table>
      </card>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Help',

  props: {
    card: Object,
  },

  methods: {
    link(path) {
      return window.Nova.config.base + `/resources/${path}`
    },
  },

  computed: {
    search() {
      return '#'
    },
    whatson() {
      return this.link('events')
    },
    venues() {
      return this.link('venues')
    },
    villages() {
      return this.link('villages')
    },
    content() {
      return this.link('pages')
    },
    users() {
      return this.link('users')
    },
    version() {
      const parts = window.Nova.config.version.split('.')
      parts.splice(-2)

      return `${parts}.0`
    },
  },
}
</script>
