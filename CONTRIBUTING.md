# DEP 5: Agent and Asset Identity
description: Decentralised Identifiers for Assets and Agents

## Table Of Content
   * [Table of Contents](#table-of-contents)
   * [Overview](#overview)
   * [Motivation](#motivation)
   * [Specification](#specification)
   * [Rationale](#rationale)
   * [Implementations](#implementations)
   * [License](#license)

---

## Overview
Starfish is an open source developer toolkit for building decentralised data ecosystems and use cases.

Starfish provides the tools and capabilities required for an application developer to create, orchestrate, execute and manage decentralised digital supply lines spanning multiple parties in the data ecosystem. The ability for such parties to interoperate is made possible by conformance to DEP Standard APIs.

This DEP specifies Starfish as a set of abstract capabilities and APIs supported by the toolkit: It does not specify the precise developer-level API, since these decisions will depend upon the idioms, conventions and syntax of specific language implementations.

---

## Motivation
Building decentralised data ecosystems is a monumental task, and interoperability will depend on the adoption of common standards.

We draw an analogy to the growth in world trade enabled by container shipping: the explosive growth rates of world trade since 1970 were strongly enabled by the adoption of ISO Standards for shipping containers. Such standards enable the construction and operation of much larger container ships, dockside infrastructure such as container cranes and container terminals, all of which are able to interoperate in global supply chains thanks to the common standards.

In the same way, Starfish provides a common abstraction to enable decentralised data infrastructure to interoperate effectively.

* Any existing data resource can be "packaged" into a Data Asset usable with Starfish

* Any existing compute resource or algorithm can be expressed as a Starfish Operation, and made available for remote invocation across the ecosystem (see DEP6)

* Digital Supply Lines can be constructed representing a flow of data assets and execution of algorithms / compute operations across many participants

There is no practical limit to the types of operations that can be created, and potentially recombined in interesting ways to create novel data solutions. Orchestration of such operations with Starfish is a perfect way to facilitate rapid innovation in data and AI solutions, especially where these solutions must orchestrate data and services across multiple parties in a decentralised or federated model.

---

## Specification

### Assets
Assets are represented in Starfish as an abstraction enabling users to work with such Assets wherever they may be located in the Data Ecosystem.

### Asset Creation
Starfish must provide the ability to create data assets, where the creator of the asset may specify both metadata and data content.

Starfish should provide automatic creation of default metadata, for developer convenience, subject to the expectation that the user may override such defaults.

### Asset Registration
Starfish must provide the ability to create data assets, where the creator of the asset may specify both metadata and data content.

Starfish should provide automatic creation of default metadata, for developer convenience, subject to the expectation that the user may override such defaults.

---



