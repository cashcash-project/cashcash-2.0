// Copyright (c) 2020 The cashcash developers
// Distributed under the MIT software license, see the accompanying
// file COPYING or https://www.opensource.org/licenses/mit-license.php.

#ifndef cashcash_SAPLING_TEST_FIXTURE_H
#define cashcash_SAPLING_TEST_FIXTURE_H

#include "test/test_cashcash.h"

/**
 * Testing setup that configures a complete environment for Sapling testing.
 */
struct SaplingTestingSetup : public TestingSetup {
    SaplingTestingSetup();
    ~SaplingTestingSetup();
};


#endif //cashcash_SAPLING_TEST_FIXTURE_H
