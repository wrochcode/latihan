<x-app-layout :title=" $name ?? 'Contact'">
    Contact page
    <form action="/contact" method="POST">
    @csrf
    
    <button type="submit">Send</button>
    </form>
</x-app-layout>