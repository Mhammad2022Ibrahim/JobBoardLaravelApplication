<x-layout>
    <x-slot:heading>
        Posts
    </x-slot:heading>

    <div class="max-w-4xl mx-auto space-y-6">
        @forelse ($posts as $post)
            <article class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200 overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">{{ $post['title'] }}</h2>

                    <div class="prose text-gray-700 mb-4">
                        {{ $post['content'] }}
                    </div>

                    <div class="flex items-center text-sm text-gray-500 space-x-4 mb-4">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ $post['author'] }}
                        </span>
                        @if($post->employer)
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm2 6a2 2 0 104 0 2 2 0 00-4 0zm8 0a2 2 0 104 0 2 2 0 00-4 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $post->employer->name }}
                            </span>
                        @endif
                    </div>

                    <div class="border-t pt-4">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Comments ({{ $post->comments->count() }})</h3>
                        @forelse ($post->comments as $comment)
                            <div class="bg-gray-50 rounded-lg p-3 mb-2 last:mb-0">
                                <p class="text-gray-700">{{ $comment->content }}</p>
                            </div>
                        @empty
                            <p class="text-gray-500 italic">No comments yet.</p>
                        @endforelse
                    </div>
                </div>
            </article>
        @empty
            <div class="text-center py-12">
                <p class="text-gray-500 text-lg">No posts available.</p>
            </div>
        @endforelse

        <div class="mt-6">
            {{ $posts->links() }} <!-- for pagination-->
        </div>
    </div>
</x-layout>


<!-- 
The view is now much more user-friendly with these improvements:

Key Changes:

Fixed HTML structure - Removed improper <li> tags outside lists

Better visual hierarchy - Used proper semantic HTML with <article> tags

Enhanced styling - Added hover effects, better spacing, and visual separation

Icons for metadata - Added SVG icons for author and employer information

Comment counter - Shows number of comments in the header

Individual comment styling - Each comment now has its own styled container

Empty states - Better handling when no posts or comments exist

Responsive design - Added max-width container for better readability

Improved typography - Better text sizing and color contrast

The layout now provides a clean, modern card-based design that's much easier to scan and read. 
-->