With concepts being added to the next revision of C++ it is expected that new concepts get defined. Each concept defines a set of operations used by generic code. One such use could be a generic test verifying that all parts of a concept are defined and checking generic interactions between a concept’s operations. Ideally, such a test even works with classes only partially modelling a concept to guide the implementation of classes.

This presentation doesn’t use the actual concept extensions but shows how generic tests can be created using features of C++17. For the generic tests the detection idiom and constexpr if are used to determine availability of required operations and gracefully dealing with the abseence of operations. The generic tests should be able to cover basics of classes modelling a concept. Obviously, specific behaviour for classes will still require corresponding tests.

Attendees are expected to be familiar basic C++. However, deep knowledge of template meta programming is not needed.

<a href=http://cppconf.ru/talks/day-2/track-a/3.pdf>Slides in pdf</a>
