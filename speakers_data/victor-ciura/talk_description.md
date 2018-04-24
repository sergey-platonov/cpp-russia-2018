Wouldn’t it be nice if we had a standard C++ type to represent strings ? Oh, wait... we do: std::string. Wouldn’t it be nice if we could use that standard type throughout our whole application/project ? Well… we can’t ! Unless we’re writing a console app or a service. But, if we’re writing an app with GUI or interacting with modern OS APIs, chances are that we’ll need to deal with at least one other non-standard C++ string type. Depending on the platform and project, it may be CString from MFC or ATL, Platform::String from WinRT, QString from Qt, wxString from wxWidgets, etc. Oh, let’s not forget our old friend `const char*`, better yet `const wchar_t*` for the C family of APIs…

So we ended up with two string types in our codebase. OK, that’s manageable: we stick with std::string for all platform independent code and convert back-and-forth to the other XString when interacting with system APIs or GUI code. We’ll make some unnecessary copies when crossing this bridge and we’ll end up with some funny looking functions juggling two types of strings; but that’s glue code, anyway… right?

It’s a good plan... until our project grows and we accumulate lots of string utilities and algorithms. Do we restrict those algorithmic goodies to std::string ? Do we fallback on the common denominator `const char*` and lose the type/memory safety of our C++ type ? Is C++17 std::string_view the answer to all our string problems ?

We’ll try to explore our options, together, with a case study on a 15 year old Windows application: Advanced Installer (www.advancedinstaller.com) - an actively developed C++ project, modernized to C++17, thanks to clang-tidy and “Clang Power Tools” (www.clangpowertools.com).

<a href=http://cppconf.ru/talks/day-1/track-a/5.pdf>Slides in pdf</a>
